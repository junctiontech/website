<!--Admin controller added by Rohit on 02 april 15-->
<!-- BEGIN MAIN CONTENT -->
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Admin extends CI_Controller {

	
		function __construct() {
		parent::__construct();
		$this->data[]="";
		$this->data['url'] = base_url();
		$this->load->library('upload');
		$this->load->model('mhome');
		$this->load->library('session');
		$this->load->library('parser');
		$this->data['base_url']=base_url();
	 }
	
	
	
	/*Admin dashboard start*/
	public function admin_dash()
	{   
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		//print_r((!empty($user_data['role']))?$user_data['role']:'');die;
		//print_r($this->session->userdata('user_data'));die;
		$filter = array('status' => 'requested' );
		$user_data_info=$this->data['user_data_info']=$this->mhome->get_user($filter,'tbl_user');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('admin_dash',$this->data);
		$this->parser->parse('include/footer',$this->data);
		
	}
	/*user verification accept user*/
	public function verify_user_accept($filter=false,$info=false)
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');                       
		if($info==1){
		$data = array('status' => 'confirm' ); } 
		if($info==2){ $data = array('status' => 'rejected' ); } 
		$update_status=$this->data['update_status']=$this->mhome->update_user_status_byfilter($filter,$data,'tbl_user');
		redirect('admin/admin_dash');
	}
	/*user verification accept user end*/
	/*user user role to assign role start*/
	public function user_role_management()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'confirm' );
		$user_data_info=$this->data['user_data_info']=$this->mhome->get_user($filter,'tbl_user');
		//$user_role=$this->data['user_role']=$this->mhome->get_area('tbl_role');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('user_role_management',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/* role assign to user*/
	public function role_assign($filter=false)
	{   	$this->data['user_data']=$this->session->userdata('user_data');
			$userdata=$this->session->userdata('user_data');
			$filter = array('user_id' => $this->input->post('user_id'));
			$data= array(	'role' => $this->input->post('role')); 
			$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'tbl_user');
			redirect('admin/user_role_management');
	}
	/*role assign user end*/
	/*user user role to assignent role end*/
	/*Area assign to a user start*/
	public function area_assign()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'confirm' );
		$user_data_info=$this->data['user_data_info']=$this->mhome->get_user($filter,'tbl_user');
		$district_data=$this->data['district_data']=$this->mhome->get_area('tbl_district');
		$tahsil_data=$this->data['tahsil_data']=$this->mhome->get_area('tbl_tahsil');
		$village_data=$this->data['village_data']=$this->mhome->get_area('tbl_village');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('area_assign',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/*insrt into area assign to user*/
	public function area_assign_user()
	{  // print_r($_POST);die;
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$selectionlist = $_POST['selectionlist'];
		$comma_separated = implode(",", $selectionlist);
		$filter =array('user_id' => $this->input->post('user_id'));
		$check_user=$this->data['check_user']=$this->mhome->get_user($filter,'tbl_assignarea');
	
		if($check_user){
			$filter =array('user_id' => $this->input->post('user_id'));
			$existing_villages_str = $check_user[0]->village;
			$existing_villages_arr = explode(',',$existing_villages_str);
			$village_count = count($existing_villages_arr);
			for($i=0;$i<$village_count;$i++)
			{
				if (strpos($comma_separated,$existing_villages_arr[$i]) !== false) {
					//echo "exists";
					
				}
				else {
					//echo "does not exist";
					$comma_separated = $comma_separated .','.$existing_villages_arr[$i];
				}
			}
			
			$data= array( 	'village' =>$comma_separated);
			
			$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'tbl_assignarea');
		}
		else{
		$data= array( 'user_id' => $this->input->post('user_id'),
		'district' => $this->input->post('district'),
		'tahsil' => $this->input->post('tahsil'),
		'village' => ($comma_separated));
	    $assign_area=$this->data['assign_area']=$this->mhome->assign_user_area($data,'tbl_assignarea'); 
		}
		redirect('admin/area_assign');
	}
	/*delete user assign village start*/
	public function delete_village_assign_user()
	{  // print_r($_POST);die;
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$selectionlist = $_POST['selectionlist'];
		$comma_separated = implode(",", $selectionlist);
		$filter =array('user_id' => $this->input->post('user_id'));
		$check_user=$this->data['check_user']=$this->mhome->get_user($filter,'tbl_assignarea');
	
		if($check_user){
			$filter =array('user_id' => $this->input->post('user_id'));
			$existing_villages_str = $check_user[0]->village;
			$existing_villages_arr = explode(',',$existing_villages_str);
			$village_count = count($existing_villages_arr);
			for($i=0;$i<$village_count;$i++)
			{
				if (strpos($comma_separated,$existing_villages_arr[$i]) !== false) {
				 unset($existing_villages_arr[$i]);
		}
				else {
					//$comma_separated = $comma_separated .','.$existing_villages_arr[$i];
				}
			}
			$village = implode(",", $existing_villages_arr);
			$data= array( 	'village' =>$village);
			//print_r($data);die;
			$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'tbl_assignarea');
		}
		redirect('admin/area_assign');
	}
	/*delete user assign village end*/
	/*Area assign to a user end*/
	/*report management start*/
	public function report_management()
	{   $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'confirm' );
		$user_data_info=$this->data['user_data_info']=$this->mhome->get_user($filter,'tbl_user');
		$report_data=$this->data['report_data']=$this->mhome->get_area('add_report_format');
		  
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report_management',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}

	public function add_report(){
	
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$file=	array('upload_report' =>  $this->input->post('file_name'));
		/* upload file*/
		if($_FILES['file_name']['name'] != "")
          {
            $config['upload_path'] ='./uploaded_report/';
            $config['file_name'] = 'reports_format.txt';
            $config['allowed_types'] = "txt"; 
            $config['overwrite'] = TRUE;  
            
             $imgname = $config['file_name'];     

            $this->upload->initialize($config);
            $this->load->library('upload', $config);  
			
            if(!$this->upload->do_upload('file_name'))
                {
                $error = $this->upload->display_errors();
                $data= array('error'=>$error,);
              redirect('admin/report_management');
                return false;
                }
          }
		  
			$filename = "uploaded_report/reports_format.txt";
			$file = fopen($filename,"r");
			$rows = file($filename);
		foreach($rows as $row)	
		{
			
			$upload_report = explode(' ',$row);
		
		$data= array( 'report_name' => (!empty($upload_report[0]))?$upload_report[0]:'',
		'field2' =>  (!empty($upload_report[1]))?$upload_report[1]:'',
		'field3' =>  (!empty($upload_report[2]))?$upload_report[2]:'',
		'field4' =>  (!empty($upload_report[3]))?$upload_report[3]:'',
		'field5' =>  (!empty($upload_report[4]))?$upload_report[4]:'',
		'field6' =>  (!empty($upload_report[5]))?$upload_report[5]:'',
		'field7' =>  (!empty($upload_report[6]))?$upload_report[6]:'',
		'field8' =>  (!empty($upload_report[7]))?$upload_report[7]:'',
		'field9' =>  (!empty($upload_report[8]))?$upload_report[8]:'',
		'field10' =>  (!empty($upload_report[9]))?$upload_report[9]:''
		);
		$filter= array( 'report_name' => (!empty($upload_report[0]))?$upload_report[0]:'');
		$report_data=$this->data['report_data']=$this->mhome->get_user($filter,'add_report_format');
		//print_r($this->data['report_data']);die;
		if($report_data){
		
			$add_report=$this->data['add_report']=$this->mhome->assign_user_area($data,'add_report_format',$filter);
			
		}
		else
		{ 
			$add_report=$this->data['add_report']=$this->mhome->insert_add_new_report($data,'add_report_format');
		}
		}
		
		redirect('admin/report_management');
}
/*Schedule Automatic Report Generation start*/
public function automatic_report()
{	// print_r($_POST);die;
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$add_report_id = $_POST['add_report_id'];
		
		$comma_separated = implode(",", $add_report_id);
		//print_r($comma_separated);die;
		$data= array( 'add_report_id' => $comma_separated,
		'frequency' => $this->input->post('frequency'),
		'day'=>date('Y-m-d',strtotime($this->input->post('day'))),
		'time' =>  $this->input->post('time')
		);
		//print_r($data);die;
		$add_report_frequency=$this->data['add_report_frequency']=$this->mhome->insert_add_new_report($data,'report_frequency');
		redirect('admin/report_management');
}
/*Schedule Automatic Report Generation end*/
/*Schedule Automatic Report notification start*/
public function automatic_report_notification()
{	 	$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$selectionlist = $_POST['user_name'];
		$comma_separated = implode(",", $selectionlist);
		$role = $_POST['role'];
		$role_separated = implode(",", $role);
		$filter = array('role' => $role_separated );
		//print_r($role_separated);die;
		$user_data_info=$this->data['user_data_info']=$this->mhome->get_user_role($filter,'tbl_user');
		//print_r($user_data);die;
		$data= array( 'user_id' => $comma_separated,
		'role' => $role_separated,
		'frequency' => $this->input->post('frequency'),
		'day'=>date('Y-m-d',strtotime($this->input->post('day'))),
		'time' =>  $this->input->post('time')
		);
		//print_r($data);die;
		$add_report_frequency=$this->data['add_report_frequency']=$this->mhome->insert_add_new_report($data,'report_notification_frequency');
		  redirect('admin/report_management');
}
	/*Schedule Automatic Report notification end*/
	/*report management end*/
	/*Email function start*/
	public function email_notification()
{	 
	$to = "rohitsingh96thakur@gmail.com";
	$subject = "My subject";
	$txt = "Hello world!";
	$headers = "From: rohitsingh96thakur@gmail" . "\r\n" .
	"CC: rohitsingh96thakur@gmail";
	mail($to,$subject,$txt,$headers);
	 
}
	/*Email function end*/
	/*view report admin start*/
	public function report()
	{  
		$this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter = array('status' => 'under_validate' );
		$data_report=$this->data['data_report']=$this->mhome->get_area('add_report_format');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('report',$this->data);
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
	/*view report admin start*/
	/*user bill generation start*/
	/* bill show  start*/
	public function billing()
	
	{  $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('status' => 'validate');
		$bill=$this->data['bill']=$this->mhome->get_user($filter,'data_capture');
		$unbill=$this->data['unbill']=$this->mhome->get_user($filter,'data_capture');
		$this->parser->parse('include/header',$this->data);
		$this->parser->parse('include/top_menu',$this->data);
		$this->parser->parse('include/leftmenu',$this->data);
		$this->load->view('billing',$this->data);
		$this->parser->parse('include/footer',$this->data);
	}
	/* bill show  end*/
	
	public function billing_pay($data_capture_id=FALSE)
	
	{  $this->data['user_data']=$this->session->userdata('user_data');
		$userdata=$this->session->userdata('user_data');
		$filter= array('data_capture_id' => $data_capture_id);
		$data = array('billing_amount' => '100' );
		$assign_role=$this->data['assign_role']=$this->mhome->assign_user_role_byfilter($filter,$data,'data_capture');
		redirect("admin/billing");
	}
	/*user bill generation end*/
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */