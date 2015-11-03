
	<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*home controller coder rohit*/
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
											if($row->role=="super admin"){
											redirect('admin/admin_dash');
											}
											if($row->role=="data validator"){
												//print_r("validator user");die;
												redirect('validator/data_validator_dashboard');
											}
											if($row->role=="data collector"){
												redirect('collector/data_collector');
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
	public function admin_dash()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('admin_dash',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function billing()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('billing',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function user_role_management()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('user_role_management',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function area_assign()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('area_assign',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/*data collector geomap start*/
		public function data_collector()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_collector_leftmenu',$this->data);
		$this->load->view('data_collector',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	/*data collector geomap start*/
	/* data capture start insert in database*/
		public function data_capture()
	{  // print_r($_POST);die;
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_collector_leftmenu',$this->data);
		$this->load->view('data_capture',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function data_capture_insert()
	{  // print_r($_POST);die;
		
	/*	if($_FILES['file_name']['name'] != "")
		{
			$config['upload_path'] ='./data_capture/';
			$config['file_name'] = 'data_capture';
			$config['allowed_types'] = "gif|jpg|png";
			$config['overwrite'] = FALSE;
			//$ext =pathinfo($_FILES['file_name']['name'], PATHINFO_EXTENSION);
			//$config['file_name']= $ext;
			$imgname = $config['file_name'];
		
			$this->upload->initialize($config);
			$this->load->library('upload', $config);
				
			if(!$this->upload->do_upload('file_name'))
			{
				$error = $this->upload->display_errors();
				$data= array('error'=>$error,);
				redirect('home/data_capture');
				return false;
			}
		}*/
		
		if($_FILES['files']['name']){
					if(move_uploaded_file($_FILES['files']['tmp_name'],"data_capture/".time().$_FILES['files']['name'])){
						$filename = time().$_FILES['files']['name'];
					}
				}
		
		$data= array('latitude' => $this->input->post('latitude'),
		'longitude' => $this->input->post('longitude'),
		'department' => $this->input->post('department'),
		'asset' => $this->input->post('asset'),
		'govasset' => $this->input->post('govasset'),
		'pvtasset' => $this->input->post('pvtasset'),
		'establishment' => $this->input->post('establishment'),
		'construction' => $this->input->post('construction'),
		'scheme' => $this->input->post('scheme'),
		'agency' => $this->input->post('agency'),
		'physical_status' => $this->input->post('physical_status'),
		'programme' => $this->input->post('programme'),
		'mis_code' => $this->input->post('mis_code'),
		'mis_code_sec' => $this->input->post('mis_code_sec'),
		'electrified' => $this->input->post('electrified'),
		'is_residential' => $this->input->post('is_residential'),
		'is_pvt' => $this->input->post('is_pvt'),
		'boundary_wall' => $this->input->post('boundary_wall'),
		'computer' => $this->input->post('computer'),
		'ict' => $this->input->post('ict'),
		'kitchenshed' =>$filename,
		'play_ground' => $this->input->post('play_ground'),
		'girls_toilet' => $this->input->post('girls_toilet'),
		'boys_toilet' => $this->input->post('boys_toilet'),
		'drinking_water' => $this->input->post('drinking_water'),
		'library' => $this->input->post('library'),
		'boundarywall' => $this->input->post('boundarywall'),
		'other_attribtes' => $this->input->post('other_attribtes'),
		'other_photo' => $this->input->post('other_photo'));
		$data_capture_insert=$this->data['data_capture_insert']=$this->mhome->assign_user_area($data,'data_capture',0); 		  
		  redirect('home/data_collector');
	}
	
		/* data capture end insert in database*/
	

	public function report_management()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report_management',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

	public function vrm_geo()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/vrm_leftmenu',$this->data);
		$this->load->view('vrm_geo',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function vrm_data()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/vrm_leftmenu',$this->data);
		$this->load->view('vrm_data',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function report_vrm()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/vrm_leftmenu',$this->data);
		$this->load->view('report_vrm',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function report_collector()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_collector_leftmenu',$this->data);
		$this->load->view('report_collector',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function report_validator()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_validator_leftmenu',$this->data);
		$this->load->view('report_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function vrm_dashboard()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/vrm_leftmenu',$this->data);
		$this->load->view('vrm_dashboard',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
/*Data validation start fetching data from database whose status is under validate*/
	public function data_validator_dashboard()
	{  $filter = array('status' => 'under_validate' );
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_validator_leftmenu',$this->data);
		$this->load->view('data_validator_dashboard',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/*Data validation end fetching data from database whose status is under validate*/
	/*data validator page start and validate data starrt*/
	public function data_validator($data_capture_id=FALSE)
	{	
		$filter= array('data_capture_id' => $data_capture_id);
	
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/data_validator_leftmenu',$this->data);
		$this->load->view('data_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function data_validator_update($data_capture_id=FALSE)
	{	$filter =array('data_capture_id' => $this->input->post('data_capture_id'));
		$data = array('department' => $this->input->post('department'),
		'asset' => $this->input->post('asset'),
		'govasset' => $this->input->post('govasset'),
		'pvtasset' => $this->input->post('pvtasset'),
		'establishment' => $this->input->post('establishment'),
		'construction' => $this->input->post('construction'),
		'scheme' => $this->input->post('scheme'),
		'agency' => $this->input->post('agency'),
		'physical_status' => $this->input->post('physical_status'),
		'programme' => $this->input->post('programme'),
		'mis_code' => $this->input->post('mis_code'),
		'mis_code_sec' => $this->input->post('mis_code_sec'),
		'electrified' => $this->input->post('electrified'),
		'is_residential' => $this->input->post('is_residential'),
		'is_pvt' => $this->input->post('is_pvt'),
		'boundary_wall' => $this->input->post('boundary_wall'),
		'computer' => $this->input->post('computer'),
		'ict' => $this->input->post('ict'),
		'other_attribtes' => $this->input->post('other_attribtes'));
	
	
	$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'data_capture');
	$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
	$this->parser->parse('include/header',$this->data);
	$this->parser->parse('include/top_menu',$this->data);
	$this->parser->parse('include/data_validator_leftmenu',$this->data);
	$this->load->view('data_validator',$this->data);
	$this->parser->parse('include/footer',$this->data);
	}
	/*data validator page start and validate data end*/
	/*logout user*/
	public function logout()
	{
	$this->session->unset_userdata($array_items);
	$this->session->sess_destroy();
	redirect('home');	
	}
	/*logout user*/
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */