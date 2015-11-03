<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Data_collector controller coder rohit*/
class Validator extends CI_Controller {

	
		function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->library('session');
		$this->load->model('mhome');
		$this->load->library('parser');
		$this->data['base_url']=base_url();
	 }
	
		
/*Data validation start fetching data from database whose status is under validate*/
	public function data_validator_dashboard()
	{  $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		//$filter = array('status' => 'under_validate' );
		$data_validate=$this->data['data_validate']=$this->mhome->get_area('data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_validator_dashboard',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/*Data validation end fetching data from database whose status is under validate*/
	/*data validator page start and validate data starrt*/
	public function data_validator($data_capture_id=FALSE)
	{	$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('data_capture_id' => $data_capture_id);
	
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function validator_valid($data_capture_id=FALSE)
	{	$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('data_capture_id' => $data_capture_id);
	
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('validator_valid',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function data_validator_update($data_capture_id=FALSE)
	{	$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter =array('data_capture_id' => $this->input->post('data_capture_id'));
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
		'status' => 'validate',
		
		'other_attribtes' => $this->input->post('other_attribtes'));
	
	
	$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'data_capture');
	redirect("validator/data_validator_dashboard");
	}
	
	public function data_validator_reject($data_capture_id=FALSE)
	{	$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter =array('data_capture_id' => $this->input->post('data_capture_id'));
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
		'status' => 'rejected',
		'other_attribtes' => $this->input->post('other_attribtes'));
	
	
	$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'data_capture');
	//$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
	redirect("validator/data_validator_dashboard");
	}
	/*data validator page start and validate data end*/
	public function report_validator()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'under_validate' );
		$data_report=$this->data['data_report']=$this->mhome->get_area('add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function view_report($add_report_id=FALSE)
	{  
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('add_report_id' => $add_report_id);
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */