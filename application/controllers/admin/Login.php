<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		loginredirect('admin/dashboard/');
		$this->session->unset_userdata("username");
		$style['file']="includes/plugins/iCheck/square/blue.css";
		$data['styles']=$style;
		$data['title']="Login";
		$data['body_class']="login-page";
		$this->load->view('includes/top-section',$data);
		$this->load->view('pages/login');
	}
	public function user(){
		loginredirect('admin/dashboard/franchise_dashboard');
		$this->session->unset_userdata("username");
		$style['file']="includes/plugins/iCheck/square/blue.css";
		$data['styles']=$style;
		$data['title']="Login";
		$data['body_class']="login-page";
		$this->load->view('includes/top-section',$data);
		$this->load->view('pages/user_login');
	}
	
	public function forgotpassword(){
		$this->session->unset_userdata("username");
		$data['title']="Forgot Password";
		$data['body_class']="login-page";
		$this->load->view('includes/top-section',$data);
		$this->load->view('pages/forgotpassword');
	}
	
	public function enterotp(){
		if($this->session->userdata('username')===NULL){redirect('/');}
		$data['title']="Enter OTP";
		$data['body_class']="login-page";
		$this->load->view('includes/top-section',$data);
		$this->load->view('pages/enterotp');
	}
	
	public function resetpassword(){
		if($this->session->userdata('username')===NULL){redirect('/');}
		$data['title']="Reset Password";
		$data['body_class']="login-page";
		$this->load->view('includes/top-section',$data);
		$this->load->view('pages/resetpassword');
	}
	public function validatelogin(){
		$data=$this->input->post();
		// echo PRE;
		// print_r($data); die;
		unset($data['login']);
		$result=$this->Account_model->login($data);
	
		if($result['verify']===true){
			$this->startsession($result);
			loginredirect('admin/dashboard');
		}
		else{ 
			$this->session->set_flashdata('logerr',$result['verify']);
			redirect('admin/login/');
		}
	}
	public function fran_validatelogin(){
		$data=$this->input->post();
		unset($data['login']);
		$result=$this->Account_model->fran_login($data);
	
		if($result['verify']===true){
			
			$this->template->load('pages','franchise_dashboard',$data);
		}
		else{ 
			$this->session->set_flashdata('logerr',$result['verify']);
			redirect('admin/login/user');
		}
	}
	public function franchise_order_list(){
		if(!empty($_SESSION['fran_id'])){
			 $data['title'] = "Order List";
	         $data['datatable'] = true;
	         $id = $_SESSION['fran_id'];
             $where = array('t1.franchise_id'=>$id, 't1.status'=>1,'t2.status'=>1);
             $data['list'] = $this->Homeservice_model->franchise_order_list($where);
	         $this->template->load('admin/login','view',$data);
		}
	 
	}
	public function frachise_order_add(){
		if(!empty($_SESSION['fran_id'])){
			 $data['title'] = "Order Add";
	         $data['datatable'] = true;
	         $data['fran_id'] = $_SESSION['fran_id'];
             $data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
             $data['sub_service'] = $this->db->get_where('sub_service',array('status'=>1))->result_array();
	         $this->template->load('admin/login','add',$data);
		}


	}
	
	public function startsession($result){
		$data['user']=md5($result['id']);
		$data['name']=$result['name'];
		$data['role']=$result['role'];
		$this->session->set_userdata($data);
	}
	
	public function logout(){
		
		if(!empty($this->session->userdata('user'))){
			$data=array("user","name","role","section");
			$this->session->unset_userdata($data);
			redirect('admin/');
		}elseif (!empty($this->session->userdata('fran_id'))) {
			$data=array("fran_id");
			$this->session->unset_userdata($data);
			redirect('user/');
			
		}
		
	}
	public function get_sub_services() {
    $service_id = $this->input->post('service_id');
    
    // Example query to get sub-services based on the selected service
    $this->db->where('service_id', $service_id);
    $sub_services = $this->db->get_where('sub_service',array('status'=>1))->result_array();

    // Return the result as JSON
    echo json_encode($sub_services);
}
	
	
	public function validateUser(){
		if($this->input->post('forgotpassword')!==NULL){
			$username=$this->input->post('username');
			$result=$this->Account_model->sendotp($username);
			if($result['status']===true){
				$otp=$result['otp'];
				$verification_msg="$otp is your One Time Password to Reset password . This OTP is valid for 15 minutes. Udaan  Marketing Pvt. Ltd.";
				$smsdata=array("mobile"=>$result['mobile'],"message"=>$verification_msg);
				send_sms($smsdata);
				$this->session->set_userdata("username",$username);
				redirect('login/enterotp/'.$otp);
			}
			else{
				$this->session->set_flashdata("logerr","Username not valid!");
				redirect('login/forgotpassword/');
			}
		}
		else{
			redirect('login/');
		}
	}
	
	public function validateOTP(){
		if($this->session->userdata('username')===NULL){redirect('login/');}
		if($this->input->post('submitotp')!==NULL){
			$data['otp']=$this->input->post('otp');
			$data['username']=$this->session->userdata("username");
			$result=$this->Account_model->verifyotp($data);
			if($result['verify']===true){
				redirect('login/resetpassword/');
			}
			else{
				$this->session->set_flashdata("logerr",$result['verify']);
				redirect('login/enterotp/');
			}
		}
		redirect('login/');
	}
	public function insert_franchise_custorder(){
		$data = $this->input->post();
		unset($data['addservice']);
		$data['added_on'] = date('Y-m-d');
		$query = $this->db->insert('franchise_order',$data);
		if($query == true){
			$this->session->set_flashdata('msg',"Booking Confirm");
		}else{
			$this->session->set_flashdata('err_msg',"Booking Not Confirm");
		}
		redirect('user/franchise_order_list');
	}
	
	public function skipreset(){
		if($this->session->userdata('username')!==NULL){
			$username=$this->session->userdata("username");
			$this->session->unset_userdata("username");
			$result=$this->Account_model->getuser(array("username"=>$username));
			$this->startsession($result);
			redirect('/');
		}
		redirect("login/");
	}
	
	public function changepassword(){
		if($this->session->userdata('username')!==NULL){
			$password=$this->input->post('password');
			$username=$this->session->userdata("username");
			$where['username']=$username;
			$result=$this->Account_model->changepassword($password,$where);
		}
		redirect('login/');
	}
}
