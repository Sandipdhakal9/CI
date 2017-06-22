<?php 
class Login extends CI_Controller{

public function __construct() {
parent::__construct();

// Load form helper library
$this->load->helper('form');


// Load session library
$this->load->library('session');
}

// Show login page
public function index() {
$this->load->view('login');
}

public function loginUser(){

		//$user_type_id=$this->input->post('user_type_id');
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		
		echo "We are in UserLogin controller";
		echo "<h1>"."User Sucessfully Registered"."</h1>";
		$this->load->model('user_mgmt');
		$ulogin=$this->user_mgmt->validateUserLogin($username,$password);
		if($ulogin==1){
		$this->load->view('dashboard');
		}
		else{
		$this->load->view('login');
		}
		if ($ulogin) {
			if($ulogin==1){
				redirect ('Redirect/userDashboard');
			}

		
		else{
			redirect ('Redirect/adminDashboard');
		}
		
}else 
echo "Invalid Username and Password";
redirect ('login');

		
}

public function loginAdmin(){

	$data = array(
		'user_type_id'=>$this->input->post('Auser_type_id'),
		'username' 	  =>$this->input->post('AtxtUsername'),
		'password' 	  =>$this->input->post('AtxtPassword')

		);
		echo "We are in AdminLogin controller";
		echo "<h1>"."User Sucessfully Registered"."</h1>";
		$this->load->model('user_mgmt');
		$adminLogin=$this->user_mgmt->validateAdminLogin($data);

		if($adminLogin){
			redirect(base_url() . 'admin_dashboard');
				 	echo "login";
		}
		else{

			echo " not login";
		}



		
}


}
?>
	