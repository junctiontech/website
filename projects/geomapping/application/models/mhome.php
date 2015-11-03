<?php 
//Model Class for competition start
class Mhome extends CI_Model {
	
	 /**
	 # Programmer : Rohit
	 # Mhome Model
	 
	 */
	 
	//variable initialize
    var $title   = '';
    var $content = '';
    var $date    = '';
	
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
		//Load database connection
		$this->load->database();
    }
    /*sinup of user register start*/
	function add($data=false,$table=false)
	{
		$this->db->insert($table, $data);
	}
	/*sinup of user register end*/
	/*Get Login Details start */
		function login_check($table=false,$data=false)
		{
		
			$query = $this->db->get_where($table,$data);
			
			//echo $this->db->last_query();die;
			if($query->num_rows()>0){
			   return $query->row();
			}else{
				//echo"invalid user name or password";
				return false;
			}
	    }		
	/*Get Login Details end */
	
	/*Get department details start*/
    function get_list($filter=false,$table=false)
    {
		//print_r($filter);die;
		
		$query = $this->db->get_where($table, $filter);
		//echo $this->db->last_query();die;
		return $query->Result();
	
    }
	/*Get department details end*/
	
	/*Get user details start*/
	function get_user($filter=false,$table=false)
	{ 
		// view from Table(tble_user) of Database(geomapping)
	$query = $this->db->get_where($table,$filter); 
	return $query->Result();
	}
	/* get user details end*/
	function get_unbill($status=false,$billing_amount=false,$table=false)
	{ $data = array('billing_amount !=' => $billing_amount);
		//print_r($status);die;
		$status = array('status' => $status);
	$this->db->where($data);
		$query = $this->db->get_where($table,$status); 
	return $query->Result();
	}
	function get_user_role($filter=false,$table=false)
	{ //$filter1 = " role='boss' AND role='active'";
		
	$query = $this->db->get_where($table,$filter); 
	//echo $this->db->last_query();die;
	return $query->Result();
	}
	
	/* update user verification status*/
	function update_user_status_byfilter($filter=false,$data=false,$table=false)
	{
			$this->db->where('user_id',$filter);
			$this->db->update($table,$data);
		    //echo $this->db->last_query();die;
	}
	/*update user verification status end*/
	
	/*assign user role insert into tble_role start*/
	function assign_user_role_byfilter($filter=false,$data=false,$table=false)
	{
		if($filter){
			
			$this->db->where($filter);
			$this->db->update($table,$data);
		     
		}else{
			
			$this->db->insert($table, $data);
		}
		
	}
	/*assign user role insert into tble_role end*/
	/*get user to assign area start*/
	function get_area($table=false)
	{ 
	$query = $this->db->query("select * from ".$table."");
	return $query->Result();
	}
	/*get user to assign area end*/
	/*insert user area assign to user start*/
	function assign_user_area($data=false,$table=false,$filter=false)
	{ 
			if($filter!=0){
			//echo "hfsj";die;
			$this->db->where($filter);
			$this->db->update($table,$data);
		     
		}else{
			//echo "gg";die;
			$this->db->insert($table, $data);
		}
	}
	function insert_add_new_report($data=false,$table=false)
	{ 
	$this->db->insert($table, $data);
		
	}
	/*insert user area assign to user end*/
	
	
	
}
//Model Class for department end
?>
