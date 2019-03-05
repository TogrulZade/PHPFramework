<?php 
/* Call Module: Funksiyalar çağırılır
* Yeni array teyin edib, view sehifesine gondereceyimiz array ile array_merge usulundan istifade edib gondere bilerik.
*/

class services extends Controller
{
public $par;
public $filter = 'filter_validate';
	public function __construct()
	{
		parent::__construct();
		$this->filter_validate = new $this->filter();
		$this->input = new input();
	}

	public function Index($param = '',$to = '')
	{

		$par = '';
		if(isset($param)){
			$par = $this->filter_validate->set_rules($param,'','xss_clean|required');
			$par = $this->filter_validate->xss($param);
			// echo $this->filter_validate();
		}

		$service_model = $this->load->model("services");

		$service_data = $service_model->services($par);
		// $service_data = htmlspecialchars_decode($service_data['service']);


		$header = new Header();
		$header->header();

		if($_POST){
			$rules = 'required|xss_clean|min[3]';
			$name = $this->input->p('name');
			$email = $this->input->p('email');
			$begin_date = $this->input->p('begin_date');			
			$end_date = $this->input->p('end_date');			
			$begin_time = $this->input->p('begin_time');			
			$end_time = $this->input->p('end_time');			
			$phone = $this->input->p('phone');			
			$order = $this->input->p('order');			
			$company = $this->input->p('company');	
			$type = $this->input->p('type');	
			$nefer = $this->input->p('nefer');	
			if($type == 'personal')$type = 1;
			elseif($type == 'company')$type = 2;

			$orderCheck = $service_model->check("services",array("serv_id"=>$order));
			if($orderCheck == 1){
				$phone = $this->filter_validate->set_rules($phone,"Əlaqə nömrəsi",$rules."");
				$nefer = $this->filter_validate->set_rules($nefer,"Nəfər sayı","num|".$rules);
				$email = $this->filter_validate->set_rules($email,"Email",$rules."");
				$end_time = $this->filter_validate->set_rules($end_time,"Sifarişin bitmə saatı",$rules."");
				$begin_time = $this->filter_validate->set_rules($begin_time,"Sifarişin başlama saatı",$rules."");
				$end_date = $this->filter_validate->set_rules($end_date,"Sifarişin bitmə tarixi",$rules."");
				$begin_date = $this->filter_validate->set_rules($begin_date,"Sifarişin başlama tarixi",$rules."");
				$name = $this->filter_validate->set_rules($name,"Ad Soyad",$rules."");

				$error = $this->filter_validate->run();


				if(isset($error['error']) and is_array($error)){
					$service_data = array_merge($service_data,$this->filter_validate->run());
					}else{
					$order = $service_model->order(array(":order_name"=>$name,":order_company"=>$company,":order_serv"=>$order,":sifarisci"=>$type,":order_begin_date"=>$begin_date,":order_now_clock"=>date('H:i'),":order_phone"=>$phone,":order_email"=>$email,":order_end_date"=>$end_date,"order_begin_time"=>$begin_time,":order_end_time"=>$end_time,":order_now_time"=>time(),":order_now_date"=>date('d-m-Y')));
					if($order == 1){
						$order_message = array("success"=>'Sifarişiniz müvəffəqiyyətlə göndərildi. Qısa zaman içərisində sizinlə əlaqə saxlanılacaq');
						$service_data = array_merge($service_data,$order_message);
					}else{
						$service_data = array_merge($service_data);
					}
					if($service_data){
						$this->load->view('services',$service_data);
						$this->load->view("footer");
					}else{
						// show_404();
						echo "Servis";
					}
				}
			}else{

				$this->load->view('Message',array("status"=>-1,"message"=>"$orderCheck Belə xidmət mövcud deyil"));

				$this->load->view("footer");
			}
		}else{
			if($service_data){
				$this->load->view('services',$service_data);
				$this->load->view("footer");
				}else{
					$this->load->view('services',$service_data);
				$this->load->view("footer");
				}
			}
		}
}
 ?>