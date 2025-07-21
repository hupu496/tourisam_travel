<?php defined('BASEPATH') or exit('No direct script access allowed');

class Searchservice extends CI_Controller{
	function __construct(){
		parent::__construct();
		checklogin();
	}
	public function index(){
		$data['title'] = "Add Search Service";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
 		//print_r($data);die;
		$this->template->load('admin/searchservice','add',$data);
	}
	public function sub_service(){
		$data['title'] = "Add Sub service";
		$data['breadcrumb'] = array('admin/searchservice' =>'Dashboard');
		$servilist = $this->Homeservice_model->get_servicewebsite(array('status'=>1),'all');
		$data['servilist'] = $servilist;
		$this->template->load('admin/searchservice','sub_service',$data);
	}

	 public function insert_subservice(){
	 $data = $this->input->post();
	 $result=$this->db->insert('sub_service',$data);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Search Created.");
	}
    else{
   $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/sub_servicelist');
} 

	public function searchlist(){
		$data['title'] = "Search List";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $searchlist= $this->Search_model->get_search(array('all'));
		if(!empty($searchlist)){
			$this->session->set_flashdata('msg',"data already Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		else{
			$this->session->set_flashdata('msg',"data add Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['searchlist'] = $searchlist;
		$this->template->load('admin/searchservice','view',$data);
	}
	public function sub_servicelist(){
		$data['title'] = "Sub Service list";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->sub_servicelist();
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','subservicelist',$data);
	}
	public function edit_subservice($id){
		$id = $this->uri->segment('4');
		$data['title'] = "Sub Service Edit";
		$data['breadcrumb'] = array('dashboard'=>'Dashboard');
		$data['datatable'] = true;
        $subservicelist= $this->Search_model->edit_subservice($id);
		if(empty($subservicelist)){
			$this->session->set_flashdata('msg',"data not Found.");
			redirect($_SERVER['HTTP_REFERER']);
		}
		$data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();

		$data['subservicelist'] = $subservicelist;
		$this->template->load('admin/searchservice','edit_subservice',$data);

	}
	public function update_subservice(){
	 $data = $this->input->post();
	 $where = $this->db->where('id',$data['id']);
	 $result=$this->db->update('sub_service',array('service_id'=>$data['service_id'],'sub_service'=>$data['sub_service'],'price'=>$data['price']),$where);
	 if($result === true){
	  $this->session->set_flashdata('msg',"Update Succesfully.");
	}
    else{
     $this->session->set_flashdata('err_msg',$result);
	}
	redirect('admin/searchservice/sub_servicelist');

	}
	public function delete_subservice($id){
		$id = $this->uri->segment('4');
	    $result= $this->Staff_model->delete_subservice($id);
	    if($result === true){
	    $this->session->set_flashdata('msg',"Delete Sub Service.");
	   }
	   else{
	  $this->session->set_flashdata('err_msg',$result);
	   }
	   redirect('admin/searchservice/sub_servicelist');
	}
}	 
