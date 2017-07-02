<?php

/**
* 
*/
class User_ctrl extends CI_Controller
{
	
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

 			public function logout() {
            $this->session->sess_destroy();
            $this->load->view('login');
        }


	public function registerUser()
	{
		$data = array(
		'user_type_id'=>$this->input->post('user_type_id'),
		'first_name'  =>$this->input->post('first_name'),
		'last_name'   =>$this->input->post('last_name'),
		'email' 	  =>$this->input->post('email'),
		'username' 	  =>$this->input->post('username'),
		'password' 	  =>$this->input->post('password')

		);
		echo "<h1>"."User Sucessfully Registered, Now go to Login Page from 'Login Here' Option. "."</h1>";
		$this->load->model('user_mgmt');
		$this->user_mgmt->registerUser($data);
		$this->load->view('signUp');

	}



	public function updateUserProfile(){

		$uid=$this->input->post('user_id');

		$data = array(
		'first_name'=>$this->input->post('txtFirstName'),
		'last_name' =>$this->input->post('last_name'),
		'email'    	=>$this->input->post('email'),
		'password' 	=>$this->input->post('password')

		);
		$this->load->model('user_mgmt');
		$this->user_mgmt->userUpdate($uid,$data);


		$this->getUserdata();
		echo "<h1>"."Your Profile has been updated."."</h1>";

	}
	public function getUserdata()
	{
		$this->load->model('user_mgmt');
		$this->load->library('session');
		$uname=$_SESSION['username'];
		$getData=$this->user_mgmt->getUserData($uname);
			$data['profile']=$getData;

			$this->load->view('UpdateProfile',$data);
	}


}










?>