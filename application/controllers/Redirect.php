<?php
/**
* 
*/
class Redirect extends CI_Controller
{
	public function index()
	{
		$this->load->view('index');
	}
	public function userDashboard()
	{
		$this->load->view('dashboard');
	}
	public function adminDashboard()
	{
		$this->load->view('admin_dashboard');
	}
	public function updateProfile()
	{
		$this->load->view('updateProfile');
	}
	public function search(){
		$this->load->view('search');
	}
	public function fareInfo(){
		$this->load->view('fare_info');
	}
	public function routeInfo(){
		$this->load->view('route_info');
	}
	public function rentVehicle(){
		$this->load->view('rent_vehicle');
	}
	public function vehicleSchedule(){
		$this->load->view('vehicle_schedule');
	}
	public function newsUpdates(){
		$this->load->view('news_updates');
	}

	public function addVehicle(){
		$this->load->view('add_vehicle');
	}

	public function updateVehicle(){
		$this->load->view('update_vehicle');
	}

	public function deleteVehicle(){
		$this->load->view('delete_vehicle');
	}

	public function addFare(){
		$this->load->view('add_fare');
	}

	public function updateFare(){
		$this->load->view('update_fare');
	}

	public function deleteFare(){
		$this->load->view('delete_fare');
	}

	public function updateNews(){
		$this->load->view('add_news_update');
	}

	public function deleteNews(){
		$this->load->view('delete_news_update');
	}
	public function login(){
		$this->load->view('login');
	}
	public function signUp(){
		$this->load->view('signUp');
	}



 }


?>