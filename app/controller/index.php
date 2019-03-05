<?php

/**
* Ana Sehife: Hec bir control gelmedikde
*/
class Index extends Controller
{
	public $default;
	public $filter_validate;
	public $input;
	public $message;
	public $token;
	public $setoken;
	function __construct()
	{
		session::init();
		parent::__construct(); 
		$this->token = isset($_POST["token"])? $_POST["token"] : "";
		
		$this->input = new input();		
		### Call Navigation Links functions ** // 
		$this->header = new Header();
		
	}

	public function valid_token()
	{
		return ($this->_token == $this->setoken) ? 1 : 0;
	}

	public function Index($cname='',$cemail="",$cmessage=""){
			$index_model = $this->load->model('index');

			if(!is_array($this->message)){
				$this->message = array("message"=>"");
			}
				$message = $this->message;
			// ## Include Index_Model ** //

			// Call navigation
			$this->header->header();
			## Main page results **/
			$main_page = $index_model->main("main");

			## Xidmetleri bazadan cekib getiririk
			$services = $index_model->services();

			## Vacancy bazadan çəkib gətiririk!
			$vacancy = $index_model->vacancy();
			
			## joinUs bazadan çəkib gətiririk!
			$joinUs = $index_model->joinUs();

			## Contact bazadan çəkib gətiririk!
			$contact = $index_model->contact();

			## About bazadan çəkib gətiririk!
			$About = $index_model->About();

			## Indexe gedecek datalar birlsedirilir.
			$data = array_merge($main_page,$services,$vacancy,$joinUs,$contact,$message,$About);
			
				if(isset($_POST['go']))
				{
					if(Token::check($this->token)){

					$cname = $this->input->p('contact_name');
					$cemail = $this->input->p('contact_email');
					$cmessage = $this->input->p('contact_message');

					## Send values to Model
					$contact = $index_model->contactMessage(array(":cname"=>$cname,":cemail"=>$cemail,":cmessage"=>$cmessage));
						if($contact == 1)
						{
							$this->message = array("message"=>'Məktubunuz müvəffəqiyyətlə göndərilmişdir!');
						}
				}else{
					redirect(URL."TokenError");
				}
			}else{
				$this->load->view('index',$data);
				$this->load->view('footer');
			}
	} 


	public function contactMessage($cname = '',$cemail = '',$cmessage = '')
	{

		$cname = $this->input->p('contact_name');
		$cemail = $this->input->p('contact_email');
		$cmessage = $this->input->p('contact_message');

		$index_model = $this->load->model('index');
		## Send values to Model
		$contact = $index_model->contactMessage(array(":cname"=>$cname,":cemail"=>$cemail,":cmessage"=>$cmessage));
		if($contact == 1){
			$this->message = array("message"=>'Məktubunuz müvəffəqiyyətlə göndərilmişdir!');
			redirect(URL.'?message=send#contact');
		}
	}

	public function follow()
	{
		if(isset($_POST['follow']) && $_POST['follow'] == 'follow'){
			$index_model = $this->load->model('index');
			$email = $this->input->p('email');
			$yoxla = $index_model->checkfollow(array('email'=>$email));
				if($yoxla>0){
					$this->header->header();
					$this->load->view('Message',array("message"=>"Siz daha əvvəl üzv olmusunuz!","status"=>0));
				}else{
					$follow = $index_model->follow(array(':email'=>$email,":date"=>date("Y-m-d H:i:s"),":time"=>time()));
						if($follow){
							// redirect(URL."Index?message=oldu");
							//Call navigation menu
							$this->header->header();
							$this->load->view('Message',array("message"=>"Üzv olduğunuz üçün təşəkkür edirik!","status"=>1));

						}else{
							// redirect(URL."Index?message=error");
							//Call navigation menu
							$this->header->header();

							$this->load->view('Message',array("message"=>"Bazada səhvlik yarandı. Xahiş edirik yenidən cəhd edəsiniz!","status"=>-1));
						}
				}
		}else{
			$this->header->header();
			$this->load->view('Message',array("message"=>"Əməliyyat düzgün aparılmadı!","status"=>-2));
			$this->load->view("footer");
		}
	}
}



?>