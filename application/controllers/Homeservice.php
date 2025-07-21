<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once FCPATH . 'vendor/autoload.php';
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;


	
class Homeservice extends CI_Controller {
	

	function __construct(){
	   parent::__construct();
	   //$this->load->model('Homeservice_model');
	  // $this->load->library('paging');
	   $this->perPage = 15;	
	}
	public function qrcode($data)
	{
				
				$this->load->library('ciqrcode');
		
				
				$hex_data   = bin2hex($data);
				$save_name  = time() . '.png';
		
			
				$dir = 'assets/qrcode/';
				if (!file_exists($dir)) {
					mkdir($dir, 0775, true);
				}
				
				$config['cacheable']    = true;
				$config['imagedir']     = $dir;
				$config['quality']      = true;
				$config['size']         = '1020';
				$config['black']        = array(255, 255, 255);
				$config['white']        = array(255, 255, 255);
				$this->ciqrcode->initialize($config);
		
				
				$params['data']     = $data;
				$params['level']    = 'L';
				$params['size']     = 10;
				$params['savename'] = FCPATH . $config['imagedir'] . $save_name;
				$this->ciqrcode->generate($params);
			
				$return = array(
					'content' => $data,
					'file'    => $dir.$save_name
				);
				return $return;
			}
	
	public function index()
	{
		
		$data['title']="Home";
		$this->load->view('website/top-section',$data);
		$this->load->view('website/index',$data);
        $this->load->view('website/footer');
       
	}
	public function about()
	{
		$data['title']="About Us";
		$this->load->view('website/top-section',$data);
      
		$this->load->view('website/about');
        $this->load->view('website/footer');
	}

// 	public function franchise_book()
// 	{
// 		$data['title']="term condition";
// 		$this->load->view('website/top-section',$data);
      
// 		$this->load->view('website/franchise_book');
//         $this->load->view('website/footer');
// 	}
// 	public function franchise_orderbook(){
// 		$data = $this->input->post();
    
// 			$upload_path = './assets/uploads/franchise/';	
// 		    $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
// 		  if($_FILES['photo']['name']!=''){	
// 			  $photo = upload_file("photo", $upload_path, $allowed_types, time());
// 			  if ($photo !='') {
// 				  $data['photo'] = $photo['path'];
// 			  }
// 		  }
// 		   if($_FILES['aadhaar']['name']!=''){
// 			  $aadhaar = upload_file("aadhaar", $upload_path, $allowed_types, time());
// 			  if ($aadhaar !='') {
// 				  $data['aadhaar'] = $aadhaar['path'];
// 			  }
// 		  }
// 		  if($_FILES['pancard']['name']!=''){
// 			  $pancard = upload_file("pancard", $upload_path, $allowed_types, time());
// 			  if ($pancard !='') {
// 				  $data['pancard'] = $pancard['path'];
// 			  }
// 		  }
		 
// 		  $run=$this->Homeservice_model->franchise_orderbook($data);
// 		if($run){
// 			$this->session->set_flashdata("web_msg","Franchise Added Successfully!!");
// 			redirect('franchise_makepayment');
// 		}else{
// 			$this->session->set_flashdata("web_err_msg",$run);
// 			redirect('franchise_book');
// 		}

// 	}
// public function franchise_makepayment()
// {
//     $data['title'] = "Make Payment";
//     $this->load->helper('cookie');
//     $franchise_id = get_cookie('franchiseid');

//     $customerdata = $this->Homeservice_model->get_franchisedetail($franchise_id);

//     // Your existing data and UPI details
//     $data['customerdata'] = $customerdata;  
//     $amount = 10000;
//     $data['price'] = $amount;
   

//     // Bank details
//     $upi_id = $data['customerdata']['upi_id']; // Static UPI VPA or bank details
//     $name = $data['customerdata']['business_name'];

//     // Generate UPI payment URL
//     $upi_url = "upi://pay?pa=$upi_id&pn=$name&am=$amount&cu=INR";

//     // Create QR code with UPI URL
//     $qrCode = QrCode::create($upi_url)
//         ->setSize(300)
//         ->setMargin(10)
//         ->setEncoding(new Encoding('UTF-8'))
//         ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh());

//     // Create a label without setFontSize()
//     $label = Label::create('Scan to Pay')
//         ->setAlignment(new LabelAlignmentCenter());

//     // Create a PNG writer
//     $writer = new PngWriter();

//     // Write the QR code and include the label
//     $result = $writer->write($qrCode, null, $label);

//     // Output the QR code as a base64-encoded image
//     $data['qrcode'] = base64_encode($result->getString());

//     // Load views and pass the $data
//     $this->load->view('website/top-section', $data);
  
//     $this->load->view('website/franchisemakepayment', $data);
//     $this->load->view('website/footer');
//     $this->load->view('website/bottom-script');
//     $this->load->view('website/bottom-section');
// }

//   public function franchise_payment_verify(){
//   	$data = $this->input->post();
//     $expiry = date('d-m-Y', strtotime('+1 year'));
//   	$query = $this->db->update('franchise_book',array('utr_no'=>$data['utr_no'],'order_status'=>1,'price'=>$data['price'],'expiry_date'=>$expiry),array('id'=>$data['id']));
//   	if($query ==true){
//   		    $this->session->set_flashdata("web_msg","Franchise Confirm Soon");
// 			    redirect('franchise_pdf'); 	
// 			  }else{
// 			  	 $this->session->set_flashdata("web_err_msg",$query);
// 			     redirect('makepayment');
// 			  }
//   }
//    public function franchise_pdf(){
//   	$data['title'] = "Order pdf";
//   	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
// 	$QR =$this->qrcode($url);
// 	$data['qrcode'] = $QR;
//   	$this->load->helper('cookie');
//     if(!empty(get_cookie('franchiseid'))){
//     	$franchise_id = get_cookie('franchiseid');
//        $data['order'] = $this->Homeservice_model->get_franchisedetail($franchise_id);
//     }
//     $this->load->view('website/franchise_pdf',$data);

//   }
// 	public function privacy_policy()
// 	{
// 		$data['title']="term condition";
// 		$this->load->view('website/top-section',$data);
      
// 		$this->load->view('website/privacy_policy');
//         $this->load->view('website/footer');
// 	}
// 	public function refund_policy()
// 	{
// 		$data['title']="term condition";
// 		$this->load->view('website/top-section',$data);
      
// 		$this->load->view('website/refund_policy');
//         $this->load->view('website/footer');
// 	}
// 	public function service()
// 	{
// 		$this->load->helper('cookie');
//     	$login_record = get_cookie('login_cookie');
//     	if(empty($login_record)){
//     		$this->session->set_flashdata("web_err_msg","Oops User Login Firstly!!");
//     		redirect('login');
//     	}
// 	    $data['title']="Services";
//         $this->load->view('website/top-section',$data);
      
//         $where = array('t1.status'=>2);
// 		$data['customer_review'] = $this->Homeservice_model->reviewlist($where);
//         $data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
// 		$this->load->view('website/services',$data);
//         $this->load->view('website/footer');
//     }
//     public function service_form()
// 	{
//         $id = $this->input->post();
// 	    $data['title']="Service Form";
//         $this->load->view('website/top-section',$data);
      
//         $data['subservice'] = $this->db->get_where('sub_service',array('service_id'=>$id['id'],'status'=>1))->result_array();
//         $data['service'] = $this->db->get_where('services',array('id'=>$id['id'],'status'=>1))->row_array();
// 		$this->load->view('website/service_form',$data);
//         $this->load->view('website/footer');
//     }
   
// 	public function contact()
// 	{ 	
//         $data['title']="Contact Us";
//         $this->load->view('website/top-section',$data);
      
//         $data['service'] = $this->db->get_where('services',array('status'=>1))->result_array();
// 	    $this->load->view('website/contact',$data);
//         $this->load->view('website/footer');
//         $this->load->view('website/bottom-script');
// 	    $this->load->view('website/bottom-section');
// 	}
//   public function register()
// 	{ 	
//     $data['title']="Register";
//     $this->load->view('website/top-section',$data);
  
// 	$this->load->view('website/register');
//     $this->load->view('website/footer');
//     $this->load->view('website/bottom-script');
// 	$this->load->view('website/bottom-section');
// 	}
	
	
// 	public function contactform(){
// 		$data = $this->input->post();
// 		$from= $data['email'];
// 		$email = "info@daesyncart.com";
//     	$subject = "Services Daesyncart Customer Enquiry";
//     	$data['added_on'] = date('d-m-Y');
//     	$message="Name: ".$data['name']."<br>"."Mobile: ".$data['mobile']."<br>"."Email: ".$data['email']."<br>"."Service: ".$data['service']."<br>"."Address: ".$data['address']."<br>"."Description: ".$data['description']."<br>"."Date: ".$data['added_on']."<br>";
//         $query = sendemail($from,$email,$subject,$message,$image_upload);
//         if($query){
//     		$this->session->set_flashdata("web_msg","Contact Sent Contact Soon");
//     		redirect('contact');	
//     	}
//     	else{
//     		$this->session->set_flashdata("web_mdg","Contact  not sent successfully");
//     	}
//     	redirect('contact');
		
// 	}
//     public function login()
// 	{ 	
//         $data['title']="Login";
//         $this->load->view('website/top-section',$data);
      
// 	    $this->load->view('website/login');
//         $this->load->view('website/footer');
//         $this->load->view('website/bottom-script');
// 	    $this->load->view('website/bottom-section');
//     }	
//      public function user(){
//         $data['title'] = "Franchise Login";
//         $this->load->view('website/top-section',$data);
//         $this->load->view('website/franchise_login');
//         $this->load->view('website/bottom-script');
// 	    $this->load->view('website/bottom-section');

  	
//   }
  
//     public function servicedetails()
// 	{ 	
//         $data['title']="Services Details";
//         $this->load->view('website/top-section',$data);
      
// 	    $this->load->view('website/servicedetails');
//         $this->load->view('website/footer');
//         $this->load->view('website/bottom-script');
// 	    $this->load->view('website/bottom-section');
//     }	  
 
//     public function serviceform_save(){
//     	$this->load->helper('cookie');
//     	$login_id = get_cookie('login_cookie');
//     	if($login_id){
//     	$data=  $this->input->post();
//     	$data['added_on'] = date('Y-m-d');
//     	$datas =$this->Homeservice_model->get_user($login_id);   	
//     	$data['user_id'] = $datas['id'];
    	
       
//     	$query = $this->db->insert('booknow',$data);
//     	$insert_id = $this->db->insert_id();
//     	$cookie = array(
//         'name'   => 'booking_id',
//         'value'  => $insert_id,
//         'expire' => '86400'        
//          ); 
		
//         $this->input->set_cookie($cookie);
//     	if($query){
//     		$this->session->set_flashdata("web_msg","service order Successfully Contact Soon");
//     		redirect('/makepayment');
    		
//     	}
//     	else{
//     		$this->session->set_flashdata("web_mdg","Order not successfully");
//     			redirect('/');
//     	}
    
//     }
//     else {
//       $this->session->set_flashdata('request_err_msg', "Please Login First Before Checkout !!");
//       redirect('/login');
//     }
//     }
   
  
//   public function makepayment()
// {
//     $data['title'] = "Make Payment";
//     $this->load->helper('cookie');
//     $book_id = get_cookie('booking_id');

//     $customerdata = $this->Homeservice_model->get_customerdetail($book_id);

//     // Your existing data and UPI details
//     $data['customerdata'] = $customerdata;  
//     $amount = $customerdata['price'];

//     // Bank details
//     $upi_id = "sanjaygts.1971-3@oksbi"; // Static UPI VPA or bank details
//     $name = "Udaan Marketing Service";

//     // Generate UPI payment URL
//     $upi_url = "upi://pay?pa=$upi_id&pn=$name&am=$amount&cu=INR";

//     // Create QR code with UPI URL
//     $qrCode = QrCode::create($upi_url)
//         ->setSize(300)
//         ->setMargin(10)
//         ->setEncoding(new Encoding('UTF-8'))
//         ->setErrorCorrectionLevel(new ErrorCorrectionLevelHigh());

//     // Create a label without setFontSize()
//     $label = Label::create('Scan to Pay')
//         ->setAlignment(new LabelAlignmentCenter());

//     // Create a PNG writer
//     $writer = new PngWriter();

   
//     $result = $writer->write($qrCode, null, $label);

//     // Output the QR code as a base64-encoded image
//     $data['qrcode'] = base64_encode($result->getString());

//     // Load views and pass the $data
//     $this->load->view('website/top-section', $data);
  
//     $this->load->view('website/makepayment', $data);
//     $this->load->view('website/footer');
//     $this->load->view('website/bottom-script');
//     $this->load->view('website/bottom-section');
// }

//   public function payment_verify(){
//   	$data = $this->input->post();
//   	$query = $this->db->update('booknow',array('utr_no'=>$data['utr_no'],'order_status'=>1),array('id'=>$data['id']));
//   	if($query ==true){
//   		  $this->session->set_flashdata("web_msg","Booking Confirm Soon");
// 	    redirect('order_status'); 	
// 	  }else{
// 	  	 $this->session->set_flashdata("web_err_msg",$query);
// 	     redirect('makepayment');
// 	  }
//   }
//   public function order_status(){
//   	$data['title'] = "Order List";
//     $this->load->helper('cookie');
//     if(!empty(get_cookie('login_cookie'))){
//     	$userid = get_cookie('login_cookie');
//     	$this->db->order_by('id', 'DESC');  // Replace 'id' with your desired column
//         $data['order'] = $this->db->get_where('booknow', array('user_id' => $userid, 'status' => 1))->result_array();
//     }
    
//   	$this->load->view('website/top-section', $data);
  
//     $this->load->view('website/order_status', $data);
//     $this->load->view('website/footer');
//     $this->load->view('website/bottom-script');
//     $this->load->view('website/bottom-section');
//   }
//   public function orderpdf(){
//   	$id = $this->uri->segment('3');
//   	$data['title'] = "Order pdf";
//   	$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
// 	$QR =$this->qrcode($url);
// 	$data['qrcode'] = $QR;
//   	$this->load->helper('cookie');
//     if(!empty(get_cookie('login_cookie'))){
//     	$userid = get_cookie('login_cookie');
//     	$where = array('t1.user_id'=>$userid,'t1.id'=>$id,'t1.status'=>1);
//     	$data['order'] = $this->Service_model->orderpdf($where);
//     }
   
//     $this->load->view('website/order_pdf',$data);

//   }
 
//   public function review(){
//   	 $this->load->helper('cookie');
//   	 $login_id = get_cookie('login_cookie');
//   	 if(!empty($login_id)){
//   	 	$data = $this->input->post();
//   	 	$query = $this->db->insert('review',array('emp_id'=>$login_id,'order_id'=>$data['order_id'],'rating'=>$data['rating'],'review'=>$data['review'],'added_on'=>date('Y-m-d')));
//   	 	if($query == true){
//   	 		$this->session->set_flashdata("web_msg","Review Submit Successfully!!");
// 			    redirect('/'); 	
// 			}else{
// 				$this->session->set_flashdata("web_err_msg",'Review not Sumbit Successfully');
// 			    redirect('order_status');
// 			}
//   	 }

//   }

//     public function registeruser(){
//     	$data = $this->input->post();
//       $upload_path = './assets/register/aadhaar/';	
// 		  $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
// 		  if($_FILES['aadhar_card']['name']!=''){	
// 			  $aadhar_card = upload_file("aadhar_card", $upload_path, $allowed_types, time());
// 			  if ($aadhar_card !='') {
// 				  $data['aadhar_card'] = $aadhar_card['path'];
// 			  }
// 		  }
// 		  $upload_path = './assets/register/photo/';
// 		  $allowed_types = 'gif|jpg|jpeg|png|pdf|GIF|JPG|JPEG|PNG|PDF';
// 		  if($_FILES['photo']['name']!=''){	
// 			  $photo = upload_file("photo", $upload_path, $allowed_types, time());
// 			  if ($photo !='') {
// 				  $data['photo'] = $photo['path'];
// 			  }
// 		  }

// 	    $query = $this->Homeservice_model->register_user_model($data);
// 	    if($query==true){
// 			    $this->session->set_flashdata("web_msg","User Register Successfully!!");
// 			    redirect('login'); 	
// 		   }elseif ($query == false) {
// 		   $this->session->set_flashdata("web_err_msg",'Already Mobile number or Email Registered');
// 			    redirect('register');
// 		   }else{
// 			    $this->session->set_flashdata("web_err_msg",$query);
// 			    redirect('register');
// 		   }
//     }
//     public function loginuser(){
//     	$data = $this->input->post();
//     	$query = $this->Homeservice_model->login_user_model($data);
    
//     	if($query == 1){
// 			$this->session->set_flashdata("web_msg","User Login Successfully!!");
// 			 redirect('service');	
// 		}else{
// 			$this->session->set_flashdata("web_err_msg",$query);
// 			redirect('login');
// 		}
//     }
    
//     public function userlogout(){
//     	  $this->load->helper('cookie');
//         delete_cookie('login_cookie');
//         delete_cookie('service_customer_id');
//     		redirect('login');
//     }
//     public function myorder(){
//        $this->load->helper('cookie');
//        $login_record = get_cookie('login_cookie');
    		 
//     		  $myorderlist = $this->Service_model->myorder(array('user_id'=>$login_record), 'all');
    	  
//        $data['title'] = "My Order";
//        $data['myorder'] = $myorderlist;
//         $this->load->view('website/top-section',$data);
      
// 	      $this->load->view('website/myorder');
//         $this->load->view('website/footer');
//         $this->load->view('website/bottom-script');
// 	      $this->load->view('website/bottom-section');

//     }
//     public function success()
//   {
//     $postdata = $this->input->post();
//     $cid = $postdata['user_id'];
//     $ser_id = $postdata['id'];
//     $ordertotal = $postdata['merchant_amount'];
//     $paymentdetail = json_encode($postdata);
//     $order_id = $postdata['order_id'];
//       // $data = array('member_id'=>$member_id,'member'=>$member,'order_id'=>$order_id,'rv'=>$total_rv,'price'=>$orderfinal,'mrp'=>$total_mrp,'payment_method'=>'online','profit'=>$total_profit);
//       //     $d=json_encode($data);
//       //     $curl = curl_init();
//       //     $base_url=API_URL.'/purchase';
//       //     curl_setopt_array($curl, array(
//       //     CURLOPT_URL => $base_url,
//       //     CURLOPT_RETURNTRANSFER => true,
//       //     CURLOPT_ENCODING => "",
//       //     CURLOPT_MAXREDIRS => 10,
//       //     CURLOPT_TIMEOUT => 30,
//       //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//       //     CURLOPT_CUSTOMREQUEST => "POST",
//       //     CURLOPT_POSTFIELDS => $d,
//       //     CURLOPT_HTTPHEADER => array(
//       //       "Cache-Control: no-cache",
//       //       "Content-Type: application/json"
//       //     ),
//       //     ));
  
//       //     $response = curl_exec($curl);
//       //     $err = curl_error($curl);
//       //     curl_close($curl);
        
//     //$order_array = json_decode($order_id,true);
//     if (!empty($order_id)) {
//     	// echo "dfkldf.......".$order_id.".......".$postdata['razorpay_payment_id']."..........".$paymentdetail.".....".$ser_id;die;
//       $date = date('Y-m-d H:i:s');
//       $insertstatus = $this->db->update('service_order', array('order_id' => $order_id, 'payment_id' => $postdata['razorpay_payment_id'], 'payment_details' => $paymentdetail, 'payment_time' => $date),array('id' => $ser_id));
     
//       if ($insertstatus) {
//         // update paymentstatus
//         $this->db->update('service_order', array('payment_status' => '1'), array('id' => $ser_id));
//        	$this->load->helper('cookie');
//         delete_cookie('service_customer_id');
//         $this->session->set_flashdata('request_msg', "Order Placed Successfully !!");
//       } else {
//         $this->session->set_flashdata("web_err_msg",$query);
//       }
//     }
//     $this->session->set_flashdata("web_msg","payment successfully!!");
//     redirect('/');
//   }
//   public function fail_order()
//   {
//     $order_id = $this->session->userdata('order_id');
//     //$order_array = json_decode($order_id,true);
//     if (!empty($order_id)) {
//       //foreach($order_array as $orderid){
//       $this->db->update('service_order', array('payment_status' => '0', 'status' => '0'), array('id' => $ser_id));
//       //}
//     }
//     $this->session->set_flashdata('request_err_msg', "Payment failed Closed");
//     redirect('/');
//   }
//   public function contactsave(){
//   	$data = $this->input->post();
//   	$query = $this->db->insert('contact_us',$data);
  	
//   	if($query){
//   		 $this->session->set_flashdata("web_msg","Contact Save Successfully!!");
//   	}
//   	else{
//   		 $this->session->set_flashdata('web_err_msg', "Contact Save failed ");
//   	}
//   	 redirect('contact');
//   }
    
}
