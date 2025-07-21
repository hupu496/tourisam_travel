<?php defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Staff";
		$data['breadcrumb'] = array('admin/staff' =>'Dashboard');
 		//print_r($roles);die;
		$this->template->load('admin/staff','add',$data);
	}
	public function insert_staff(){
		$config['upload_path']='./assets/uploadpic/';
		$config['allowed_types']='jpg|jpeg|png';
		$new_name = time().$_FILES["image"]["name"];
		$config['file_name'] = $new_name;
		$this->upload->initialize($config);
		$data = $this->input->post();
		//print_r($data);die;
		unset($data['addstaff']);
		if($this->upload->do_upload('image')){
		   $image = $this->upload->data();
		   $image = "assets/uploadpic/".$image['raw_name'].$image['file_ext'];
		   $data['image'] = $image; 
	   }
	   $result=$this->Staff_model->insert_staff($data);
	   //print_r($result);die;
	   if($result === true){
	  $this->session->set_flashdata('msg',"staff Added.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/staff/stafflist');
	
	} 
	public function stafflist(){
		$data['title'] = "Staff List";
		$data['breadcrumb'] = array('admin/dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $stafflist = $this->Staff_model->get_staff();
       // print_r($servilist); die;
		if(empty($stafflist)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard');
		}
		$data['stafflist'] = $stafflist;
		$this->template->load('admin/staff','view',$data);
	}
	public function update_staff($id){
		$data['title'] = "Edit Staff ";
		$data['breadcrumb'] = array('staff/dashboard'=>'Dashboard');
		$deliveryboy = $this->Staff_model->get_staff(array('id'=>$id),'single');
		$data['deliveryboy'] = $deliveryboy;
		$this->template->load('admin/staff','edit',$data);
	}
	public function update_deliverylist(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/delivery/';	
		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		    // print_r($_FILES['upload_camera']);die;
		  if($_FILES['upload_photo']['name'] !=''){	
			  $upload_photo = upload_file("upload_photo", $upload_path, $allowed_types, time());
			  if ($upload_photo !='') {
				  $data['upload_photo'] = $upload_photo['path'];
			  }
		  }
		   if($_FILES['upload_aadhaar_front']['name'] !=''){
			  $upload_aadhaar_front = upload_file("upload_aadhaar_front", $upload_path, $allowed_types, time());
			  if ($upload_aadhaar_front !='') {
				  $data['upload_aadhaar_front'] = $upload_aadhaar_front['path'];
			  }
		  }
		  if($_FILES['upload_aadhaar_back']['name'] !=''){
			  $upload_aadhaar_back = upload_file("upload_aadhaar_back", $upload_path, $allowed_types, time());
			  if ($upload_aadhaar_back !='') {
				  $data['upload_aadhaar_back'] = $upload_aadhaar_back['path'];
			  }
		  }
		  if($_FILES['upload_driving_licence']['name'] !=''){
			  $upload_driving_licence = upload_file("upload_driving_licence", $upload_path, $allowed_types, time());
			  if ($upload_driving_licence !='') {
				  $data['upload_driving_licence'] = $upload_driving_licence['path'];
			  }
		  }
		  if($_FILES['upload_vechicle_card']['name'] !=''){
			  $upload_vechicle_card = upload_file("upload_vechicle_card", $upload_path, $allowed_types, time());
			  if ($upload_vechicle_card !='') {
				  $data['upload_vechicle_card'] = $upload_vechicle_card['path'];
			  }
		  }
	      $query = $this->Staff_model->deliveryboy_update($data);

		 if($query === true){
	  $this->session->set_flashdata('msg',"Delivery boy data update.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$query);
	   }
	   redirect('admin/staff/stafflist');
		
		
	}
	public function delete_deliveryboy($id){
	    $result= $this->Staff_model->delete_deliveryboy($id);
	    if($result === true){
	  $this->session->set_flashdata('msg',"staff Block.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/staff/stafflist');
	}
	public function block_deliveryboy(){
		$data['title'] = "Delivery boy Block";
		$data['breadcrumb'] = array('admin/dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $block_deliveryboy = $this->Staff_model->get_block_deliveryboy();
       // print_r($servilist); die;
		if(empty($block_deliveryboy)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard');
		}
		$data['block_deliveryboy'] = $block_deliveryboy;
		$this->template->load('admin/staff','block_deliveryboy',$data);
	   	
	}
	public function unblock_deliveryboy($id){
	    $result= $this->Staff_model->unblock_deliveryboy($id);
	    if($result === true){
	  $this->session->set_flashdata('msg',"staff unblock.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/staff/block_deliveryboy');
	}
	public function unapproved_deliveryboy($id){
	    $result= $this->Staff_model->unapproved_deliveryboy($id);
	    if($result === true){
	  $this->session->set_flashdata('msg',"Unapproved delivery boy.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/staff/stafflist');
	}
	public function approved_deliveryboy($id){
	    $result= $this->Staff_model->approved_deliveryboy($id);
	    if($result === true){
	  $this->session->set_flashdata('msg',"Approved delivery boy.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/staff/stafflist');
	}
	// public function index(){
	// 	$data['title'] = "Add Staff";
	// 	$data['breadcrumb'] = array('admin/staff' =>'Dashboard');
 // 		//print_r($roles);die;
	// 	$this->template->load('admin/staff','add',$data);
	// }

}

	


