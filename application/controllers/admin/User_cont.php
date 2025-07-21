<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_cont extends CI_Controller {
    function __construct(){
        parent::__construct();
        checklogin();
    }
	public function user_view(){
		$data['title'] = "Register List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$where=array('status'=>'1');
        $data['user_list'] = $this->User_model->get_user_model($where,'all');
		if(empty($data['user_list'])){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard');
		}
		$this->template->load('admin/user_cont','view',$data);
	}
	public function userdelete(){
		$editid = $this->uri->segment('4');
		$where=array('id'=>$editid);
	    $query = $this->db->update('user_register',array('status'=>0),$where);
	    if($query == true){
	    	$this->session->set_flashdata('msg',"Delete User Successfully!");
	    	redirect('admin/user_cont/block_user');
	    }else{
	    	$this->session->set_flashdata('err_msg',"Opps Not Delete!");
	    	redirect('admin/user_cont/block_user');
	    }
	}
	public function contactdel(){
		$editid = $this->uri->segment('4');
		$where=array('id'=>$editid);
	    $query = $this->db->update('contact_us',array('status'=>0),$where);
	    if($query == true){
	    	$this->session->set_flashdata('msg',"Delete Contact Successfully!");
	    	redirect('admin/user_cont/contactlist');
	    }else{
	    	$this->session->set_flashdata('err_msg',"Opps Not Delete!");
	    	redirect('admin/user_cont/contactlist');
	    }
	}
	public function activateuser(){
		$editid = $this->uri->segment('4');
		
	    $query = $this->User_model->unblock_user_model($editid);
	    if($query == true){
	    	$this->session->set_flashdata('msg',"Activate Successfully!");
	    	redirect('admin/user_cont/user_view');
	    }else{
	    	$this->session->set_flashdata('err_msg',"Opps Not Activate!");
	    	redirect('admin/user_cont/user_view');
	    }
	}
	
	
	public function contactlist(){
		$data['title'] = "Contact Us List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$where=array('status'=>'1');
        $data['contactlist'] = $this->Serviceprovider_model->get_contactlist($where,'all');
       
		if(empty($data['contactlist'])){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard');
		}
		$this->template->load('admin/user_cont','contactlist',$data);
	}
	public function block_user(){
		$data['title'] = "Block User List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$where=array('status'=>'1');
        $data['blocklist'] = $this->User_model->delete_user_model();
		if(empty($data['blocklist'])){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard');
		}
		$this->template->load('admin/user_cont','block_userlist',$data);
	}
}
 



