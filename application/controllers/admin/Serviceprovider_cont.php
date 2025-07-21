<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serviceprovider_cont extends CI_Controller {
    function __construct(){
        parent::__construct();
        checklogin();
    }






	public function myservices_update(){
        $postdata = $this->input->post();
        $checkpincode=$this->Master_model->getall_city(array('pincode'=>$postdata['pincode'],'district_id'=>$postdata['district_id'],'status'=>'1'),'single');
        if(empty($checkpincode)){
            $this->session->set_flashdata('err_msg',"Address Detail Incorrect !!");
            redirect('admin/shop/shoplist'); 
        }
        unset($postdata['addshop']);
        if(empty($postdata['name']) || empty($postdata['shop_address']) || empty($postdata['pincode']) ||
         empty($postdata['username']) || empty($postdata['password']) || empty($postdata['mobile']) || empty($postdata['email']) ){
              $this->session->set_flashdata('err_msg',"Please Fill All The Feilds !!");
              redirect('admin/shop/shoplist');
        }
        $editid = $postdata['editid']; 
        unset($postdata['editid']);
        $result = $this->Master_model->update_shopdetail($postdata,$editid);
        if($result['status'] == true){
            $this->session->set_flashdata('msg',"$result[msg]");
        }else{
            $this->session->set_flashdata('err_msg',"$result[msg]");
        }
        if($this->session->role=='1'){
        redirect('admin/shop/shoplist');
        }else{
        redirect($_SERVER['HTTP_REFERER']);
        }
    }

}
 



