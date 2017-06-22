<?php
/**
* 
*/
class Redirect extends CI_Controller
{

	public function userDashboard()
	{
		$this->load->view('dashboard');
	}
	public function adminDashboard()
	{
		$this->load->view('admin_dashboard');
	}
 }


?>