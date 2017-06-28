<?php 
class Signup extends CI_Controller{
public function index()
{
	$this->load->view('signUp');

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
}



?>