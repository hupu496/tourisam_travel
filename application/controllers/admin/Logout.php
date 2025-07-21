<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	function __construct(){
		parent::__construct();		
	}
	public function index()
	{
		loginredirect();
		$role=$this->session->userdata('role');
		$this->session->unset_userdata(array('userid','name','username','role','validated'));
		  redirect('admin/login/logout');
	}
}
