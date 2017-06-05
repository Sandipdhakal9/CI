<?php 
class Signup extends CI_Controller{
public function index()
{
	$this->load->view('signUp');

}
	public function registerUser()
	{
		$data = array(
		'first_name'=>$this->input->post('fname'),
		'last_name' =>$this->input->post('lname'),
		'email' 	=>$this->input->post('email'),
		'username' 	=>$this->input->post('username'),
		'password' 	=>$this->input->post('password')

		);
		echo "We are in controller";
		$this->load->model('user_mgmt');
		$this->user_mgmt->registerUser($data);
	}
}



?>