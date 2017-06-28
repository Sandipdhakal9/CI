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

		
		//echo "We are in UserLogin controller";
		//echo "<h1>"."User Sucessfully Registered"."</h1>";
		$this->load->model('user_mgmt');
		$ulogin=$this->user_mgmt->validateUserLogin($username,$password);

		$userdata=array(
		'user_id'=>$ulogin,
		'username'=>$username,
		'logged_in'=>true
		);

		//keepting the session to the user id and username at once after the login is done ...
		$this->session->set_userdata($userdata);

		if ($ulogin) {

			if($ulogin==1){
				$this->load->library('session');
				$this->session->set_userdata('username',$username);
				$this->load->view('dashboard');

			}

		else{
			$this->load->library('session');
			$this->session->set_userdata('username',$username);
			$this->load->view('admin_dashboard');
		}
		
	}
	else{

		$this->load->view('login');
	echo "<h1>"."Invalid Username and Password" ."<h1>";
	
	 } 


		
 	 }
	}
?>
	