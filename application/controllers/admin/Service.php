<?php defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Services";
		$data['breadcrumb'] = array('admin/service' =>'Dashboard');
 		//print_r($roles);die;
		$this->template->load('admin/service','add',$data);
	}
	public function insert_franchise_custorder(){
		$data = $this->input->post();

	}
	
	
	public function insert_service(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/service/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			 }
		 }
		unset($data['addservice']);
		$result = $this->Service_model->insert_service($data);
		if($result === true){
			$this->session->set_flashdata('msg',"Service Created Successfully.");
		}
		else{
			$this->session->set_flashdata('err_msg',$result);
		}
		redirect('admin/service/servilist');
	}
	public function service_edit(){
		$editid = $this->uri->segment('4');
	
		$where=array('id'=>$editid,'status'=>'1');
	    $data['edit_list'] = $this->Service_model->get_service($where,'single');
	   
		$this->template->load('admin/service','edit',$data);
	}
	public function service_update(){
		$data = $this->input->post();
		$upload_path = './assets/uploads/service/';	
		$allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
		if($_FILES['image']['name'] !=''){	
			  $image = upload_file("image", $upload_path, $allowed_types, time());
			  if ($image !='') {
				  $data['image'] = $image['path'];
			  }
		  } 
		  $run=$this->Service_model->serivce_edit_model($data);

		redirect('admin/service/servilist');
	}	
		
	public function servilist(){
		$data['title'] = "Service List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $servilist = $this->Service_model->get_service(array(),'all');
        // echo PRE;
       // print_r($servilist); die;
		// if(empty($servilist)){
		// 	$this->session->set_flashdata('msg',"No data Found.");
		// 	redirect($_SERVER['HTTP_REFERER']);
		// }
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','view',$data);
	}

		public function delete_servic(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->delete_service($id);
	   // print_r ($result); die;
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	public function review_list(){
		$data['title'] = "Customer List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $where = array('t1.status>='=>1);
		$servilist = $this->Homeservice_model->reviewlist($where);
		
       
		if(empty($servilist)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','reviewlist',$data);
	

	}
	public function delete_order_list(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->delete_order_list($id);
	    print_r($result);die;
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	public function permdelete_order_list(){
		$id = $this->input->post('id');
	    $result= $this->Service_model->permdelete_order_list($id);
	 
		if($result == true){
			echo "1";
		}
		else{
		 echo "0";
		}
	}
	
	public function serviceorder_list(){
		$data['title'] = "Service Order List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$current_date = date('Y-m-d');

		// Total price for today
		$this->db->select_sum('price');
		$this->db->where('status', 1);
		$this->db->where('DATE(added_on)', $current_date); // Assuming 'booking_date' is a DATETIME or DATE column
		$today_total = $this->db->get('booknow')->row()->price;

		// Overall total price
		$this->db->select_sum('price');
		$this->db->where('status', 1);  // Assuming you want to consider records where status = 1
		$overall_total = $this->db->get('booknow')->row()->price;
		$data['today_total'] = $today_total;
		$data['overall_total'] = $overall_total;
		$where = array('t1.status'=>1);
		$serviceprovider = $this->Service_model->serviceorder($where);
		if(empty($serviceprovider)){
			$this->session->set_flashdata('msg',"Add data.");
			redirect('admin/dashboard/index');
		}
		$data['serviceprovider'] = $serviceprovider;
		$this->template->load('admin/service','serviceorder_list',$data);
	}
	public function update_amount(){
		$data = $this->input->post();
		$id = $data['id'];
		$user_id = $data['user_id'];
		unset($data['id']);
		unset($data['user_id']);
		$where = array('id'=>$id,'user_id'=>$user_id);
		$this->db->where($where);
		$query = $this->db->update('service_order',$data);
		if($query == true){
			$this->session->set_flashdata('msg',"amount sent to customer.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('err_msg',"amount not to customer.");
			redirect($_SERVER['HTTP_REFERER']);

		}
	}
	public function paymentverify(){
		$id = $this->uri->segment(5);
		$status = $this->uri->segment(4);
		if($status == 'wrong'){
			$query = $this->db->update('booknow',array('order_status'=>3),array('id'=>$id));

		}else{

			$query = $this->db->update('booknow',array('order_status'=>2),array('id'=>$status));
		}
		
		
		if($query == true){
			$this->session->set_flashdata('msg',"Payment update verify!");
			
		}else{
           $this->session->set_flashdata('err_msg',"payment update not verify");
		}
        redirect('admin/service/serviceorder_list');
	}
	public function franch_paymentverify(){
		$id = $this->uri->segment(5);
		$status = $this->uri->segment(4);
		if($status == 'wrong'){
			$query = $this->db->update('franchise_book',array('order_status'=>3),array('id'=>$id));

		}else{

			$query = $this->db->update('franchise_book',array('order_status'=>2),array('id'=>$status));
		}
		
		
		if($query == true){
			$this->session->set_flashdata('msg',"Payment update verify!");
			
		}else{
           $this->session->set_flashdata('err_msg',"payment update not verify");
		}
        redirect('admin/service/franchise_list');
	}
	public function blockserviceorder_list(){
		$data['title'] = "block Service Order List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$blockserviceprovider = $this->Service_model->blockserviceorder_list(array('status'=>0), 'all');
		if(empty($blockserviceprovider)){
			$this->session->set_flashdata('msg',"No data Found.");
			redirect('admin/dashboard/index');
		}
		$data['blockserviceprovider'] = $blockserviceprovider;
		$this->template->load('admin/service','blockorder_list',$data);
	}
	public function update_payment(){
		$id = $this->uri->segment('4');
		$data['payment_status'] = 3;
		$this->db->where('id',$id);
		$this->db->update('service_order', $data);
		redirect('admin/service/serviceorder_list');

	}
	public function review_update(){
		$id = $this->uri->segment(4);
		$query = $this->db->update('review',array('status'=>2),array('id'=>$id));
		if($query == true){
			$this->session->set_flashdata('msg',"Review will Be Show Customer Side.");
		}else{
			$this->session->set_flashdata('err_msg',"Review will Not Show Customer Side.");
		}
		redirect('admin/service/review_list');
	}
	public function franchise_list(){
		$data['title'] = "Franchise List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
		$current_date = date('Y-m-d');

		// Total price for today
		$this->db->select_sum('price');
		$this->db->where('status', 1);
		$this->db->where('DATE(added_on)', $current_date); // Assuming 'booking_date' is a DATETIME or DATE column
		$today_total = $this->db->get('franchise_book')->row()->price;

		// Overall total price
		$this->db->select_sum('price');
		$this->db->where('status', 1);  // Assuming you want to consider records where status = 1
		$overall_total = $this->db->get('franchise_book')->row()->price;
		$data['today_total'] = $today_total;
		$data['overall_total'] = $overall_total;
        $servilist = $this->db->get_where('franchise_book',array('status>='=>1))->result_array();
		$data['servilist'] = $servilist;
		$this->template->load('admin/service','franchiselist',$data);
	}
	// Controller function to return notification data (example: NotificationController.php)
    public function get_notifications() {
    $where = array('t1.notifications'=>1);
    $book = $this->Service_model->serviceorder($where);
    $francise = $this->db->get_where('franchise_book', array('notifications' => 1))->result_array();
    $totalMessages = count($book) + count($francise);
    $data = [
        'totalMessages' => $totalMessages,
        'book' => $book,
        'francise' => $francise,
    ];

    echo json_encode($data);
}
public function mark_all_notifications_as_seen() {
    // Update the 'notification' field to 0 for all records in both tables
    $this->db->update('booknow', array('notifications' => 0));
    $this->db->update('franchise_book', array('notifications' => 0));

    // Respond with a success message
    echo json_encode(['status' => 'success']);
}

}	
