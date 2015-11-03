<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*home controller */
class Home extends CI_Controller {

	
		function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->library('session');
		$this->load->model('mhome');
		$this->load->library('parser');
		$this->data['base_url']=base_url();
	 }
	
	public function index()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function signup()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('signup',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function password_forgot()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('password_forgot',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/*registration of user sinup start*/
	public function Register()
	{  
	$check_data= array(		
					   'name'=>$this->input->post('name'),
					   'mobile'=>$this->input->post('mobile'),
					   'imei_no'=>$this->input->post('imei_no'),
					   'password'=>$this->input->post('password'),
					   'email'=>$this->input->post('email'),
					   'date'=>date('Y-m-d H:i:s'));
						$this->data['match_data']=$this->mhome->add($check_data,'tbl_user');
						redirect('home/index');
	}
	/*registration of user sinup end*/
	/* login valid user start*/
	function login($info=false)
	{
											$data=array(
											'mobile'=>$this->input->post('mobile'),
											'password'=>$this->input->post('password')
											);
											$row=$this->mhome->login_check('tbl_user',$data);
											if($row){
											$user_data = array(
											'user_id' => $row->user_id,
											'name' => $row->name,
											'mobile'=> $row->mobile,
											'imei_no'=> $row->imei_no,
											'role'=> $row->role,
											'email'=>$row->email
											);
											$this->session->set_userdata('user_data',$user_data);	
											$user_session_data = $this->session->userdata('user_data');
											if($row->role=="Super Admin"){
											redirect('admin/admin_dash');
											}
											if($row->role=="Data Validator"){
												//print_r("validator user");die;
												redirect('validator/data_validator_dashboard');
											}
											if($row->role=="Data Collector"){
												redirect('collector/data_collector');
												//print_r("collector user");die;
											}
											if($row->role=="Vrm Integrator"){
												redirect('vrm');
												//print_r("collector user");die;
											}
											else{ 
												//redirect('admin/admin_dash');
												print_r("your activation is not done please try after some time");die;
											}
										   }else{
											  redirect("home");
											    }
	}
	/* login valid user end*/
	
	

	/*logout user*/
	public function logout()
	{
		//$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');

	$this->session->unset_userdata($userdata);
	$this->session->sess_destroy();
	redirect('home');	
	}
	/*logout user*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */