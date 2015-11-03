<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*Data_collector controller coder rohit*/
class Collector extends CI_Controller {

	
		function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->library('session');
		$this->load->model('mhome');
		$this->load->library('parser');
		$this->data['base_url']=base_url();
	 }
	
	/*data collector geomap start*/
		public function data_collector()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_collector',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	/*data collector geomap start*/
	/* data capture start insert in database*/
		public function data_capture()
	{  // print_r($_POST);die;
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_capture',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function data_capture_insert()
	{  // print_r($_POST);die;
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		
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
		
		$_FILES['files']['name'];
					move_uploaded_file($_FILES['files']['tmp_name'],"data_capture/".time().$_FILES['files']['name']);
						
					
				
				$filename = time().$_FILES['files']['name'];
				$_FILES['play_ground']['name'];
					move_uploaded_file($_FILES['play_ground']['tmp_name'],"data_capture/".time().$_FILES['play_ground']['name']);
						
					
				
				$play_ground = time().$_FILES['play_ground']['name'];
				$_FILES['girls_toilet']['name'];
					move_uploaded_file($_FILES['girls_toilet']['tmp_name'],"data_capture/".time().$_FILES['girls_toilet']['name']);
						
					
				
				$girls_toilet = time().$_FILES['girls_toilet']['name'];
				$_FILES['boys_toilet']['name'];
					move_uploaded_file($_FILES['boys_toilet']['tmp_name'],"data_capture/".time().$_FILES['boys_toilet']['name']);
						
					
				
				$boys_toilet = time().$_FILES['boys_toilet']['name'];
				$_FILES['drinking_water']['name'];
					move_uploaded_file($_FILES['drinking_water']['tmp_name'],"data_capture/".time().$_FILES['drinking_water']['name']);
						
					
				
				$drinking_water = time().$_FILES['drinking_water']['name'];
				$_FILES['library']['name'];
					move_uploaded_file($_FILES['library']['tmp_name'],"data_capture/".time().$_FILES['library']['name']);
						
					
				
				$library = time().$_FILES['library']['name'];
				 $_FILES['wall']['name'];
					// print_r("ai hai");die;
					move_uploaded_file($_FILES['wall']['tmp_name'],"data_capture/".time().$_FILES['wall']['name']);
						
					
				
				$wall = time().$_FILES['wall']['name'];
				$_FILES['other_photo']['name'];
					move_uploaded_file($_FILES['other_photo']['tmp_name'],"data_capture/".time().$_FILES['other_photo']['name']);
						
					
				
				$other_photo = time().$_FILES['other_photo']['name'];
		
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
		'play_ground' => $play_ground,
		'girls_toilet' => $girls_toilet,
		'boys_toilet' => $boys_toilet,
		'drinking_water' => $drinking_water,
		'library' => $library,
		'boundarywall' => $wall,
		'other_attribtes' => $this->input->post('other_attribtes'),
		'user_id' => $this->input->post('user_id'),
		'user_role' => $this->input->post('user_role'),
		'user_name' => $this->input->post('user_name'),
		'other_photo' => $other_photo
		);
		//print_r($data);die;
		$data_capture_insert=$this->data['data_capture_insert']=$this->mhome->assign_user_area($data,'data_capture',0); 		  
		  redirect('collector/data_collector');
	}
	
		/* data capture end insert in database*/
		/* view report start*/
		public function report_collector()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		//$filter = array('status' => 'under_validate' );
		$data_report=$this->data['data_report']=$this->mhome->get_area('add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report_collector',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function view_report($data_capture_id=FALSE)
	{  
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('data_capture_id' => $data_capture_id);
		$data_validate=$this->data['data_validate']=$this->mhome->get_user($filter,'add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('data_validator',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/* view report end*/
	
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */