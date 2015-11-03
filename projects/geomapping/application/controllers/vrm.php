<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Data_collector controller coder rohit*/
class Vrm extends CI_Controller {

	
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
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'validate' );
		$data_vrm=$this->data['data_vrm']=$this->mhome->get_user($filter,'data_capture');
		
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('vrm_dashboard',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		
public function vrm_geo()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('vrm_geo',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function vrm_data($data_capture_id=FALSE)
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter =array('data_capture_id' => $data_capture_id);
		//print_r($data_capture_id);die;
		
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('vrm_data',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	public function vrm_data_validate($data_capture_id=FALSE)
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		
		$filter =array('data_capture_id' => $data_capture_id);
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		//print_r($data_validate);die;
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('vrm_validate',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	public function vrm_data_update($data_capture_id=FALSE)
	{  $this->data['user_data']=$this->session->userdata('user_data');
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
		'other_attribtes' => $this->input->post('other_attribtes'));
	
	
	$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'data_capture');
	$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'data_capture');
		
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('vrm_data',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
	public function report_vrm()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		//$filter = array('status' => 'under_validate' );
		$data_report=$this->data['data_report']=$this->mhome->get_area('add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report_vrm',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function view_report($data_capture_id=FALSE)
	{  
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('data_capture_id' => $data_capture_id);
		$data_validate=$this->data['data_validate']=$this->mhome->get_area($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */