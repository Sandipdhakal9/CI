<?php 
class Update extends CI_Controller{

public function __construct() {
parent::__construct();
	}


	public function updateUserProfile(){

		$this->user_mgmt->updateUser();
		//redirect('');

		print_r("User updated");
		echo "User profile has been updated";

	}
	public function selectUser(){
		$this->load->model("user_mgmt");
		$uname=$this->input->get('uname');
		$this->user_mgmt->selectUsername($uname);

		$result=$this->user_mgmt->selectUsername($uname);
		$data['arr']=$result;
		$this->load->view('updateProfile',$data);



	}
}