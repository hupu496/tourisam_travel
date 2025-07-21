<?php 

class Service_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->db->db_debug = false;
	}
	public function insert_service($data){	
		$name = $data['name'];
		
		unset($data['addservice']);
		$where = array('name'=>$type,'status'=>'1');
		$this->db->where($where);
		$query = $this->db->get('services');
		if($query->num_rows() == 0){
			// echo PRE;
			// print_r($data);die;

			$insert = $this->db->insert('services',$data);
			if($insert){
				return true;
			}			
			else{
				return $this->db->error();
			}
		}
		else{
			return "Service Already Added";
		}
	}
	
   public function get_service($where,$type='all'){
		$query = $this->db->get_where('services',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
	public function serivce_edit_model($data){
		$table ="services";
		$id = $data['id'];
		$this->db->where('id', $id);
	    $query = $this->db->update($table,$data);
		return $query;
	}
	
	
	
	public function serviceorder($where,$type='all'){
		$this->db->select('t1.*,t1.id as book_id,t2.id as emp_id,t2.*');
        $this->db->from('booknow as t1');
        $this->db->join('user_register as t2', 't1.user_id = t2.id');
        $this->db->order_by("t1.id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
       
        if ($type == 'all') {
            $return = $query->result_array();
        } else {
            $return = $query->row_array();
        }
        return $return;
	}
	public function orderpdf($where){
		$this->db->select('t1.*,t1.id as book_id,t2.id as emp_id,t2.*');
        $this->db->from('booknow as t1');
        $this->db->join('user_register as t2', 't1.user_id = t2.id');
        $this->db->order_by("t1.id", "desc");
        $this->db->where($where);
        $query = $this->db->get();
        $return = $query->row_array();
        return $return;
	}
	public function myorder($where,$type='all'){
		$this->db->order_by('id','desc');
		$query = $this->db->get_where('service_order',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
	public function blockserviceorder_list($where,$type='all'){
		$query = $this->db->get_where('service_order',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
		public function delete_service($id){
		$data= array('status'=>0);
		$where = array('id'=>'$id');
		$query = $this->db->update('services',$data,$where);
		
		return $query;
	}
	public function delete_order_list($id){
		$data= array('status'=>0);
		$where = array('id'=>$id);
		$this->db->where($where);
		$query = $this->db->update('service_order',$data);
		return $query;
	}
	public function permdelete_order_list($id){
		$data = array('id'=>$id);
		$this->db->where($data);
		$query = $this->db->delete('service_order',$data);
		
		return $query;
	}
	


}