<?php 

class Serviceprovider_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db->db_debug = false;
	}

	public function get_contactlist($where,$type='all'){
		$query = $this->db->get_where('contact_us',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
	
	public function serivceprovider_edit_model($data){
		$table ="servicesprovider";
		$id = $data['id'];
		$this->db->where('id', $id);
	    $query = $this->db->update($table,$data);
		return $query;
	}
	public function get_serviceprovider_inactive(){
		$query = $this->db->get_where('servicesprovider',array('status'=>0));
		return $query->result_array();
	}
	public function delete_serviceprovider($id){
		$data= array('status'=>0);
		$where = array('id'=>$id);
		$query = $this->db->update('servicesprovider',$data,$where);
		return $query;
		
	}
	public function unblock_serviceprovider_model($id){
		$data= array('status'=>1);
		$where = array('id'=>$id);
		$query = $this->db->update('servicesprovider',$data,$where);
		return $query;
		
	}


}