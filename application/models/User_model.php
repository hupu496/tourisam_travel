<?php 

class User_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db->db_debug = false;
	}

   
	public function get_user_model($where,$type='all'){
		$query = $this->db->get_where('user_register',$where);
		if($type == 'all'){
			return $query->result_array();
		}
		else{
			return $query->row_array();
		}
	}
	public function user_edit_model($data){
		$table ="user_register";
		$id = $data['id'];
		$this->db->where('id', $id);
	    $query = $this->db->update($table,$data);
		return $query;
	}
	public function get_userinactive_model(){
		$query = $this->db->get_where('user_register',array('status'=>0));
		return $query->result_array();
	}
	public function delete_user($id){
		$data= array('status'=>0);
		$where = array('id'=>$id);
		$query = $this->db->update('user_register',$data,$where);
		return $query;
		
	}
	public function delete_user_model(){
		$data= array('status'=>0);
	
		$query = $this->db->get_where('user_register',$data)->result_array();
		return $query;
	}
	public function unblock_user_model($id){
		$data= array('status'=>1);
		$where = array('id'=>$id);
		$query = $this->db->update('user_register',$data,$where);
		return $query;
	}


}