<?php 

class Staff_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db->db_debug = false;
	}
	public function insert_staff($data){
		$mobile=$data['mobile'];
		$where=array('mobile'=>$mobile);
		$this->db->where($where);
		$query=$this->db->get('staff');
		if($query->num_rows() == 0){
			$insert=$this->db->insert('staff',$data);
			if($insert){
				return true;
			}
			else{
				return $this->db->error();
			}
		}
     else{
		 return "staff Already Added";
	 }
      
	}
	public function deliveryboy_update($data){
		$id=$data['id'];
		unset($data['id']);
		$this->db->where('id',$id);
		$query = $this->db->update('delivery_boy',$data);
		return $query;
	}
	public function delete_deliveryboy($id){
		$upt = array('status'=>0);
		$data = array('id'=>$id);
		// $this->db->where($data);
		$query = $this->db->update('delivery_boy',$upt,$data);
		return $query;
	}
	public function delete_subservice($id){
		$this->db->where('id',$id);
		$query = $this->db->delete('sub_service');
		return $query;
	}
	public function unblock_deliveryboy($id){
		$upt = array('status'=>1);
		$data = array('id'=>$id);
		$this->db->where($data);
		$query = $this->db->update('delivery_boy',$upt,$data,);
		return $query;
	}
	public function unapproved_deliveryboy($id){
		$data= array('approval_status'=>0);
		$where = array('id'=>$id);
		$this->db->where($where);
		$query = $this->db->update('delivery_boy',$data);
		
		return $query;
	}
	public function approved_deliveryboy($id){
		$data= array('approval_status'=>1);
		$where = array('id'=>$id);
		$this->db->where($where);
		$query = $this->db->update('delivery_boy',$data);
		
		return $query;
	}
	
	public function get_staff($where = array('status'=>1), $types='all'){
		$query = $this->db->get_where('delivery_boy',$where);
		if($types == 'all'){
			$array = $query->result_array();
		}
		else{
			$array = $query->row_array();
		}
		return $array;
	}
	public function get_block_deliveryboy($where = array('status'=>0)){
		$query = $this->db->get_where('delivery_boy',$where);
	    return $query->result_array();
		
	}
	
}