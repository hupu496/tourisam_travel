<?php 

class Search_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db->db_debug = false;
	}
   
	

	public function get_search($where = array(), $types='all'){
		$query = $this->db->get_where('search_service',$where);
		if($types == 'all'){
			$array = $query->result_array();
		}
		else{
			$array = $query->row_array();
		}
		return $array;
	}
	
	public function sub_servicelist(){
		// $query = $this->db->get_where('track',$where);
		$this->db->select('t1.*,t1.id as subservice_id,t2.id,t2.name');
		$this->db->from('sub_service t1');
		$this->db->join('services t2','t1.service_id = t2.id', 'left');
		$this->db->where('t1.status',1);
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		return $query->result_array();
		
	}
	public function edit_subservice($id){
		// $query = $this->db->get_where('track',$where);
		$this->db->select('t1.*,t1.id as subservice_id,t2.id,t2.name');
		$this->db->from('sub_service t1');
		$this->db->join('services t2','t1.service_id = t2.id', 'left');
		$this->db->where(array('t1.id'=>$id,'t1.status'=>1));
		$query = $this->db->get();
		// echo $this->db->last_query();die;
		return $query->row_array();
		
	}
	
}