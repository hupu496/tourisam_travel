<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$style['file']="includes/plugins/iCheck/square/blue.css";
		$data['styles']=$style;
		$data['title']="Dashboard";
	   $data['body_class']="login-page";
	   $this->load->view('includes/top-section',$data);
	   $this->load->view('includes/header',$data);
	   //$this->load->view('includes/sidebar',$data);
	   $this->load->view('pages/login');
		$this->template->load('pages','home',$data);
	}
}
 