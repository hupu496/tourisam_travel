<?php
class Homeservice_model extends CI_Model{
	
	
	function __construct(){
		parent::__construct(); 
		$this->load->helper('string');
	}
	
	public function register_user_model($data){
		$table="user_register";  
		$salt=random_string('alnum', 8);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['salt'] = $salt;
    $data['cpassword'] = $password;
    $data['added_on'] = date("Y-m-d");
    $login = $this->db->get_where('user_register',array('phone'=>$data['phone'],'email'=>$data['email']))->num_rows();
     if($login>0){
     	return false;
     }else{
     	 	$status=$this->db->insert($table,$data);
			
     	 	$last_id = $this->db->insert_id();
     	 	$query = $this->db->insert('login',array('email'=>$data['email'],'password'=>$data['cpassword'],'register_id'=>$last_id,'salt'=>$data['salt'],'added_on'=>date('Y-m-d H:i:s')));
    if($status == true && $query == true){
			return true;
		}
		else{
			return false;
		}
     }
		
		
	}
	public function franchise_order_list($where){
		$this->db->select('t1.*,t2.id as fran_id, t2.firstname,t2.lastname,t2.email,t2.phone');
		$this->db->from('franchise_order as t1');
		$this->db->join('franchise_book as t2','t1.franchise_id=t2.id');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function reviewlist($where){
		$this->db->select('t1.*,t2.id as empid,t2.firstname,t2.lastname,t2.aadhar_card,t2.photo,t3.service,t3.sub_service,t3.id as bookid');
		$this->db->from('review as t1');
		$this->db->join('user_register as t2','t1.emp_id = t2.id');
		$this->db->join('booknow as t3','t1.order_id=t3.id');
		$this->db->where($where);
		$query = $this->db->get();
		return $query->result_array();

	}
	public function franchise_orderbook($data){
		$table="franchise_book";  
		$salt=random_string('alnum', 8);
		$password=md5($data['password'].SITE_SALT.$salt);
		$data['salt'] = $salt;
    $data['cpassword'] = $password;
    $data['added_on'] = date("Y-m-d");
    $query = $this->db->insert('franchise_book',$data);
    $insert_id = $this->db->insert_id();
    	$cookie = array(
        'name'   => 'franchiseid',
        'value'  => $insert_id,
        'expire' => '86400'        
         ); 
		
        $this->input->set_cookie($cookie);
    if($query == true){
    	return true;

    }else{
       return false;

    }
    
    

	}


	
	public function getdifferencemin($start, $curecord)
	{
		$date = date('Y-m-d');
		$startone = strtotime("$start");
		$curone = strtotime("$date $curecord");
		$difference = $curone - $startone;
		$minutes = ceil($difference / 60);
		return $minutes;
	}
	
	public function get_servicewebsite($where,$type='all'){
		$query = $this->db->get_where('services',$where);
		if($type == 'all'){
			return $query->result_array();
		}else{
			return $query->row_array();
		}
	}
	

	public function login_user_model($data){
		 $this->load->helper('cookie');
		$table = "login";
		$email = $data['email'];
		$password = $data['password'];
		$this->db->where('email',$email);
		$query = $this->db->get($table);
		$result=$query->row_array();
		if(!empty($result)){
			$salt = $result['salt'];
			$password=md5($password.SITE_SALT.$salt);
			$hashpassword=$result['password']; 
			if($password==$hashpassword && $result['status']==1){
				$last_id = $result['register_id'];
				$cookie = array(
              'name'   => 'login_cookie',
              'value'  => $last_id,
              'expire' => '86400'        
                ); 
              set_cookie($cookie);  
              $login_record = get_cookie('login_cookie');
   
				return 1;
			}
			
		}
		else{ 
			 return $result=array('verify'=>"Wrong Password!");
			 }
	}
	public function get_user($login_id){
		$get_data = $this->db->get_where('user_register',array('id'=>$login_id));
		$result = $get_data->row_array();
    return $result;
	}
	public function get_customerdetail($book_id){
		$getdata = $this->db->get_where('booknow', array('id' => $book_id));
		$result = $getdata->row_array();
		return $result;
	}
	public function get_franchisedetail($franchise_id){
		$getdata = $this->db->get_where('franchise_book', array('id' => $franchise_id,'status>='=>0));
		$result = $getdata->row_array();
		return $result;
	}
}
	?>