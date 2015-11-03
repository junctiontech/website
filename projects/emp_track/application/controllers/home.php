<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	  function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		
		$this->load->model('mhome');
		//Load html parser
		$this->load->library('parser');
		
		$this->data['base_url']=base_url();
	 }
	
	public function index()
	{   $this->parser->parse('include/header',$this->data);
		$this->load->view('home',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function about()
	{   $this->parser->parse('include/header',$this->data);
		$this->load->view('about',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
		public function contact()
	{   $this->parser->parse('include/header',$this->data);
		$this->load->view('contact',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
			public function register_rec()
	{   $this->parser->parse('include/header',$this->data);
		$this->load->view('register_rec',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
			public function thankyou()
	{   $this->parser->parse('include/header',$this->data);
		$this->load->view('thankyou',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function login()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('login',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function registration()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('registration',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function job_opening()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('job_opening',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function forgotpassword()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->load->view('forgot-password',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function role()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('role/role',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function emp_detail()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/emp_detail',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

	public function location_complaince()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/location_complaince',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function task_complaince()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/task_complaince',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	public function add_employee()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/add_employee',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function evaluate_employee()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/evaluate_employee',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function process_request()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/process_request',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	public function add_task()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/add_task',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function task_review()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/task_review',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function task()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('supervisor_view/task',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	//Employee user Controller starts
		public function emp_dashboard()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('emp/emp_dashboard',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
		public function task_view()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('emp/task_view',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	
	
	
		public function apply_leave()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('emp/apply_leave',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
		public function edit_profile()
	{   
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->parser->parse('include/topmenu',$this->data);
		$this->load->view('emp/edit_profile',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */