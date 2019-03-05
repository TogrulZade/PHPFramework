<?php 	
/**
* 
*/
class Messages
{
	
	public function __construct()
	{

	}

	public function Error($Error=false)
	{
		switch ($this->Error) {
			case 'incrorrectMail':
				return $this->Message = 'Yalnış email!';
			break;

			case 'incrorrectDate':
				return $this->Message = 'Yalnış Tarix qeyd etdiniz!';
			break;

			case 'incrorrectTime':
				return $this->Message = 'Yalnış saat qeyd etdiniz!';
			break;		

			case 'emptyInput':
				return $this->Message = 'Boş xana buraxdınız!';
			break;
			
		}
	}	

}

 ?>