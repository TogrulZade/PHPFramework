<?php
/**
* 
*/
class adminGiris extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->input = new input();
	}


	public function index()
	{
		session::init();
		if(session::get('login') == true){
			redirect(AURL);
		}else{
			$this->load->view('admin/adminGiris');
		}
	}

	public function control($login ='',$password='')
	{
		## AdminGiris Modul cagiririq:
		$AGM = $this->load->model('admin/adminGiris');

		$login = isset($_POST['login']) ? $_POST['login'] : '';
		$password = isset($_POST['password']) ? $_POST['password'] : '';

		$login = $this->input->p('login');
		$password = $this->input->p('password');
		$password = md5($password);
		$check = $AGM->check(array(":login"=>$login,"password"=>$password));
		if($check['admin_id'] == 1){
			session::init();
			session::set(array('login'=>1));
			session::set(array('user'=>'Admin'));
			
			redirect(URL.'admin');
		}else{		
			redirect(URL."adminGiris?message=notmatch");
		}
	}

}
?>