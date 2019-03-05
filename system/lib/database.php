<?php 
error_reporting();
class Database extends PDO
{
		
	public function __construct($dsn,$user,$password)
	{
		// if($_SERVER["HTTP_USER_AGENT"]==""){ exit(); } 
		// if($_SERVER['REMOTE_ADDR']=="127.0.0.1"){ exit(); }
		parent::__construct($dsn,$user,$password);
		$this->query("SET NAMES 'UTF8'");
		$this->query("SET CHARACTER SET 'UTF8'");
	}

	public function Join($type = "INNER", $table1 = '',$table2 = '',$First = '',$Second = "",$where = array(),$by = '',$sira = 'DESC')
	{
		if($where){
			foreach ($where as $key => $param) {}
			$sql = "SELECT * FROM ".$table1." ".$type." JOIN ".$table2." ON ".$First."=".$Second." WHERE ".$key." = :".$key." ORDER by $sira";
			$query = $this->prepare($sql);
			$query->bindValue(":".$key,$param);
		}else{
			$sql = "SELECT * FROM `".$table1."` ".$type." JOIN `".$table2."` ON `".$table1."`.`".$First."` = `".$table2."`.`".$Second."` ORDER by $by $sira";
			$query = $this->prepare($sql);
			// echo $sql;
		}

		$arr = $query->execute();
		$arr = $query->fetchAll();
		return $arr;
	}

	public function insertTo($table='',$params = array())
	{
		$fieldKeys = implode(",", array_keys($params));
		$fieldValue = ":" . implode(", :", array_keys($params));
		$sql = "INSERT into ".$table."($fieldKeys) VALUES($fieldValue)";
		$q = $this->prepare($sql);
		
		foreach ($params as $key => $param) {
			$q->bindValue(":".$key,$param);			
		}
			$ins = $q->execute();
			if($ins){
				return true;
			}else{
				return false;
			}
	}
		
	

	public function select($sql,$params = array(),$fetchMode=false,$fetchStyle=false){
		if($fetchMode == false){$fetchMode = 'fetch';}
		if($fetchStyle == false){$fetchStyle = PDO::FETCH_ASSOC;}
		$q = $this->prepare($sql);
		if($params){
			foreach ($params as $key => $value) {
				$q->bindValue($key,$value);
			}
		}
		$q->execute();
		$row = $q->$fetchMode($fetchStyle);
		return $row;
	}

	public function where($table,$where)
	{
		# code...
		foreach ($where as $key => $param) {}

		$sql = "SELECT * FROM ".$table." WHERE ".$key." = :".$key;
		$query = $this->prepare($sql);
		$query->bindValue(":".$key,$param);
		$check = $query->execute();
		$data = $query->fetch();

			if($data){
				return $data;
			}else{
				return false;
			}
	}

	public function insert($sql,$params = array())
	{
		$insert = $this->prepare($sql);		
			if($params){
				foreach ($params as $key => $value) {
					$insert->bindValue($key,$value);
					// echo $key."***".$value."<br/>";
				}
				// echo $sql;
			}
					$x = $insert->execute();
					// echo $x;
			if($x){
				return true;
			}else{
				return false;
			}
	}

	public function update($sql,$params = array(),$where = '')
	{
		$update = $this->prepare($sql);		

			if($where){
				foreach ($where as $key => $wh) {
					$update->bindValue($key,$wh);
				}
			}

			if($params){
				foreach ($params as $key => $value) {
					$update->bindValue($key,$value);
				}
			}

			// echo $sql;
			$up = $update->execute();
			if($up){
				return true;
			}else{
				return false;
			}
	}



	public function check($table='',$params = '')
	{
		# code...
		foreach ($params as $key => $param) {}

		$sql = "SELECT ".$key." FROM ".$table." WHERE ".$key." = :".$key;
		$query = $this->prepare($sql);
		$query->bindValue(":".$key,$param);
		$check = $query->execute();
		$count = $query->rowCount();

			if($count>0){
				return true;
			}else{
				return false;
			}
	}

	public function get($table = '',$params = array(),$fetchMode=false,$fetchStyle=false){
		if($fetchMode == false){$fetchMode = 'fetch';}
		if($fetchStyle == false){$fetchStyle = PDO::FETCH_ASSOC;}
			if($params){	
				foreach ($params as $key => $param) {}
				$sql = "SELECT * FROM ".$table." WHERE ".$key." = :".$key;
				$query = $this->prepare($sql);
				$query->bindValue(":".$key,$param);
			}else{
				$sql = "SELECT * FROM ".$table;	
				$query = $this->prepare($sql);			
			}
		
		$get = $query->execute();
		$get = $query->$fetchMode($fetchStyle);
		return $get;
	}

	public function selectAll($table = '',$where = array()){
		foreach ($where as $key => $param) {}

		$sql = "SELECT * FROM `".$table."`";
		$query = $this->prepare($sql);
		if($where){$query->bindValue(":".$key,$param);}
		$selectAll = $query->execute();
		$selectAll = $query->fetchAll(PDO::FETCH_ASSOC);
		return $selectAll;
	}

	public function delete($table = '',$params = array()){
		foreach ($params as $key => $param) {}
		$sql = "DELETE FROM ".$table." WHERE ".$key." = :".$key;
		$query = $this->prepare($sql);
		$query->bindValue(":".$key,$param);
		$delete = $query->execute();
		return $delete;
	}

}
 ?>