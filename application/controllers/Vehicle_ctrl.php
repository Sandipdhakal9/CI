<?php

/**
* 
*/
class Vehicle_ctrl extends CI_Controller
{
	
	public function viewRoute()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectRoute();
		$this->load->view('route_info',$data);
	}

	public function rentVehicle()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectOwner();
		$this->load->view('rent_vehicle',$data);
	}

	public function viewFare()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectFare();
		$this->load->view('fare_info',$data);
	}

	public function viewSchedule()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectSchedule();
		$this->load->view('vehicle_schedule',$data);
	}

	public function viewNews()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectNews();
		$this->load->view('news_updates',$data);
	}

	public function viewVehicle()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectVehicle();
		$this->load->view('update_vehicle',$data);
	}

	public function getVehicleRoute()
	{
		$this->load->model('Vehicle_mgmt');
		$get=$this->Vehicle_mgmt->getVehicleRoutes();
		$this->load->view('add_fare', ['cmbVehicleRoute'=>$get]);
	}




	public function addVehicle()
	{
		$data = array(
		'vehicle_id'=>$this->input->post('txtVehicleId'),
		'vehicle_type'  =>$this->input->post('cmbVehicleType'),
		'vehicle_name'  =>$this->input->post('txtVehicleName')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->registerVehicle($data);
		$this->load->view('add_vehicle');

		echo "<h1>"."New Vehicle Sucessfully Registered. Use Default User Login (Username:user password:user) to view details"."</h1>";

	}


	public function addNewsUpdate()
	{
		$news=array(
		'news_text'=>$this->input->post('txtNews')
		);


		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addNews($news);
		$this->load->view('add_news_update');

		echo "<h1>"."News Have been Sucessfully Updated"."</h1>";

	}



}







?>