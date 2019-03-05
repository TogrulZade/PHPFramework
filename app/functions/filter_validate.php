<?php 
/*
* @CodeIgniterin helper funksiyalarini evez edir!
* @Umum istifade olunacaq funksiyalardir ki, helperde yigilir.
* @Filtrasiya ile bagli funksiyalar burada yigilacaq.
* @Dogru email tipidir mi, dogru sayda herf daxil edilib mi, doldurulmasi mutleq olan bir inputdur mu ve s.
*/


/**
* Filter etmek ucun
*/
class filter_validate 
{
public $filter_falidate;
public $y = 'Igrik';
public $error;
public $input;

	public function __construct($value='')
	{
		
	}

	public function get($value='')
	{
		return htmlspecialchars($_GET[$value]);
	}


	public function xss($value=false)
	{
		return htmlspecialchars($value);
	}

	public function email($email='')
	{
		if(filter_var($email, FILTER_VALIDATE_EMAIL) == true){
			return print_r($_POST);
		}else{
			return false;
		}
	}

	public function y($value='')
	{
		echo $this->y;
	}

/*
* required
* valid_email
* trim
* xss_clean
*/
	public function set_rules($input,$name_input = '',$rules)
	{
		$this->input = $input;
		if(preg_match("/\|/", $rules,$dizi)){
			$say = substr_count($rules, '|');
			$rules  = explode('|', $rules);
		}else{
			$say = strlen($this->input);
		}

			for ($i=0; $i <=$say; $i++) { 

				// Xana Mecburi Doldurulmalidir!
				if($rules[$i] == 'required'){
					if(empty($this->input)){
						$this->error = $name_input.' bos buraxmayin';
					}
				}
				
			// HTML Kodlarindan temizleme
			if($rules[$i] == 'xss_clean'){
				$this->input = htmlspecialchars($this->input);
			}

			if($rules[$i] == 'num'){
				if(!ctype_digit($this->input)){
					$this->error = $name_input." rəqəmlə göstərilməlidir";
				}
			}

				// Minimum herf sayi
			if(preg_match("/\min\[(.*.)\]/", $rules[$i],$dizi)){
				if(mb_strlen(htmlspecialchars_decode($this->input))<$dizi[1]){
					$this->error = $name_input.' minimum '.$dizi[1].' simvol olmalidir:'.$this->input;
				}
			}

			if(preg_match("/\eyni\[(.*.)\]/", $rules[$i], $dizi)){
				if($this->input = $$dizi[1]){
					$this->error = $name_input.' ile '.$dizi[1].' uygun gelmir'.$$dizi[1];
				}
			}
			}
				
				if(isset($this->error) and !is_array($this->error)){
					return false;
				}else{
					return $input;
				}
	}

			public function run()
			{
				if(isset($this->error) and !is_array($this->error)){
					return array('error'=>$this->error);
				}else{
					// return true;
					// print_r($this->error);
					// return array('success'=>'Sifarişiniz müvəffəqiyyətlə göndərilmişdir! Qısa zaman içərisində, Sizinlə Saferoad əməkdaşları tərəfindən əlaqə saxlanılacaq!');
				}
			}

	public function Image($fileToUpload = null,$folder="join",$thatImage = 'Şəkillərdən biri')
	{
		if($_FILES[$fileToUpload]["name"]!=""){
			$prefix = rand(0,9999);
			$target_dir = "include/img/".$folder."/";
			$target_file = $target_dir .$fileToUpload."-".$prefix."-".basename($_FILES[$fileToUpload]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES[$fileToUpload]["tmp_name"]);
			    if($check !== false) {
			        echo $thatImage." is an image - " . $check["mime"] . ".<br/>";
			        $uploadOk = 1;
			    } else {
			        echo $thatImage." şəkil formatında deyil!<br/>";
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			if (file_exists($target_file)) {
			    echo $thatImage." file already exists.<br/>";
			    $uploadOk = 0;
			}
			// Check file size
			if ($_FILES[$fileToUpload]["size"] > 900000) {
			    echo $thatImage." çox böyükdür.<br/>";
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "<b>ERROR for:".$thatImage.":</b> Yalnız JPG, JPEG, PNG & GIF fayllarının yüklənməsinə icazə var.<br/>";
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo $thatImage." yüklənə bilmədi!<br/>";
			    echo "asmdfio";
			// if everything is ok, try to upload file
			} elseif($uploadOk != 0) {

		        $return  = array("status"=>1,"target_file"=>$target_file,"message"=>$thatImage." - ".$prefix."-".basename($_FILES[$fileToUpload]["name"]).$target_file." yükləndi","file"=>$prefix."-".basename($_FILES[$fileToUpload]["name"]));
		        return $return;
			}
		}else{
			return array("status"=>'0',"name"=>$_FILES[$fileToUpload]["name"]);
		}
	}
}
?>