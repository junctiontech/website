<?php 
//Model Class for competition start
class Mhome extends CI_Model {
	
	 /**
	 # Programmer : Garima
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
    
	
	/*Get department details start*/
    function get_list($filter=false,$table=false)
    {
		
		
		$query = $this->db->get_where($table, $filter);
		//echo $this->db->last_query();die;
		return $query->Result();
	
    }
	/*Get department details end*/

	function manage_subitem_cal($info=false){
		$this->db->query("INSERT ignore INTO ssr_t_costing (dep_id,chap_id,item_id,sitem_id,type,description,code,unit,amount,total_amount,quantity,rate) VALUES ".$info."");
		if($this->db->affected_rows()>0){
			return true;
		}else{
			return false;
		}
	}
	
	function get_type_detail($type_val,$type_code){
		   
		  if($type_val==='material'){
			  
			$query = $this->db->query("select rate from ssr_t_material WHERE code='".$type_code."'");
			//echo $this->db->last_query();die;
			 return $query->Result();
			  
			  
		  }
		
		
	}
}
//Model Class for department end
?>
