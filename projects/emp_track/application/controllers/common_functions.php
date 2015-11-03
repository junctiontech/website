<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Common_functions extends CI_Controller {

	 /*
	 # Programmer : Garima Soni
	 # Common_functions controller.
	 */
	function __construct()
	{
		parent::__construct();
		$this->data = array();
		$this->load->library('parser');
		$this->load->model('mhome');
		$this->data['base_url']=base_url();
	}
	
	function get_subitem_list($dep_id,$chap_id,$item_id){
	       
		       $this->data['dep_id'] = $dep_id;
		       $this->data['chap_id'] = $chap_id;
		       $this->data['item_id'] = $item_id;
			$filter = array('dep_id'=> $dep_id,
			                'chap_id'=>$chap_id,
							'item_id'=>$item_id);
			$this->data['subitem_list'] = $this->mhome->get_list($filter,'ssr_t_sitem');
			
			//print_r($this->data['subitem_list']);die;
			
		 $this->parser->parse('subitem_list', $this->data);
		
	}
	function update_order($tablename=false,$filter=false){
		foreach ($_GET['listItem'] as $position => $item){
			$this->mmicrosite->update_details_by_table_info($tablename,array("order"=>$position),array((!empty($filter))?$filter:"id"=>$item));
		}
		 
	}
	
	function get_type_value($type_val,$type_code){
	       
		 
			$data = $this->mhome->get_type_detail($type_val,$type_code);
			
			//print_r($this->data['subitem_list']);die;
			
		print_r(json_encode($data));		
		
	}
}	
?>
