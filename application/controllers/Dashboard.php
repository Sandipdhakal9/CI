<?php
/**
* 
*/
class Dashboard extends CI_Controller
{
	
	public function index(){
		$this->load->model('model_users');
		$data['title']='MVC Title';
		$data['page_header']='Inro to MVC design';

		$data['user']=$this->model_users->getUsers();

		$this->load->view('user_details',$data);


	}
}

?>