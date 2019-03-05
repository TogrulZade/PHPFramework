<?php 

/**
* 
*/
class Join extends Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->join = $this->load->model('join');
		$this->filter_validate = new filter_validate();
		$this->input = new input();
		$this->JoinModel = new Join_model();
	}

	public function Index()
	{
		$header = new Header();
		$header->header();

		$this->load->view('join');
		$this->load->view('footer');
	}

	public function JoinAction()
	{
		$name  = $this->input->p("name");
		$marka = $this->input->p("marka");
		$tutum = $this->input->p("tutum");
		$phone = $this->input->p("phone");
		$on    = $this->filter_validate->Image("on","Ön hissə");
		$arxa    = $this->filter_validate->Image("arxa","Arxa hissə");
		$ic1    = $this->filter_validate->Image("ic1","İç hissədən 1-ci şəkil");
		$ic2    = $this->filter_validate->Image("ic2","İç hissədən 2-ci şəkil");
		$ic3    = $this->filter_validate->Image("ic3","İç hissədən 3-ci şəkil");
		$ic4    = $this->filter_validate->Image("ic4","İç hissədən 4-ci şəkil");

		if($on["status"] == 1 && $arxa['status'] == 1 && $ic1['status'] && $ic2['status'] == 1 && $ic3['status'] == 1 & $ic4['status'] == 1){			
			$on_upload = move_uploaded_file($_FILES["on"]["tmp_name"], $on['target_file']);
			$arxa_upload = move_uploaded_file($_FILES["arxa"]["tmp_name"], $arxa['target_file']);
			$ic1_upload = move_uploaded_file($_FILES["ic1"]["tmp_name"], $ic1['target_file']);
			$ic2_upload = move_uploaded_file($_FILES["ic2"]["tmp_name"], $ic2['target_file']);
			$ic3_upload = move_uploaded_file($_FILES["ic3"]["tmp_name"], $ic3['target_file']);
			$ic4_upload = move_uploaded_file($_FILES["ic4"]["tmp_name"], $ic4['target_file']);

			if ($on_upload && $arxa_upload && $ic1_upload && $ic2_upload && $ic3_upload && $ic4_upload) {
					$insert = $this->JoinModel->JoinAction([":name"=>$name,":marka"=>$marka,":phone"=>$phone,":tutum"=>$tutum,":on_hisse"=>$on['target_file'],":arxa"=>$arxa['target_file'],":ic1"=>$ic1['target_file'],":ic2"=>$ic2['target_file'],":ic3"=>$ic3['target_file'],":ic4"=>$ic4['target_file']]);
					if($insert){
						redirect(URL."Join?message=ok");
					}else{
						// redirect(URL."Join?message=no");
					}
			}else{
						redirect(URL."Join?message=noUpload");
			}
		}

	}
}

?>