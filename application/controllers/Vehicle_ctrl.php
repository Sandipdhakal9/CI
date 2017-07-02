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


	public function fareDeleteInfo()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectFare();
		$this->load->view('delete_fare',$data);
	}

	public function routeDeleteInfo()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->getRouteId();
		$this->load->view('delete_vehicle_route',$data);
	}

	public function ownerDeleteInfo()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->ownerDeleteInfo();
		$this->load->view('delete_owner',$data);
	}



	public function scheduleDeleteInfo()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectSchedule();
		$this->load->view('delete_vehicle_schedule',$data);
	}


	public function stationDeleteInfo()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectFare();
		$this->load->view('delete_vehicle_station',$data);
	}





		public function deleteFareInfo()
	{
		$Fid=$this->input->post('cmbFare');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->fareDelete($Fid);

		
		$this->fareDeleteInfo();
		echo "<h1>"."Fare Info Deleted"."</h1>";

		
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

	

	public function getVehicleRoute()
	{
		$this->load->model('Vehicle_mgmt');
		$getrouteid=$this->Vehicle_mgmt->getRouteId();
		$getvid=$this->Vehicle_mgmt->getVId();
			$data['rid']=$getrouteid;
			$data['vid']=$getvid;



			$this->load->view('add_fare',$data);
	}



	public function getSearchDetail(){

		$search=$this->input->post('txtSearch');
		$this->load->model('Vehicle_mgmt');
		$data['results']=$this->Vehicle_mgmt->search($search);
		$this->load->view('search',$data);




	}
	public function search(){
		$this->load->view('search');
	}




	public function getScheduleVR()
	{
		$this->load->model('Vehicle_mgmt');
		$getrouteid=$this->Vehicle_mgmt->getRouteId();
		$getvid=$this->Vehicle_mgmt->getVId();
			$data['rid']=$getrouteid;
			$data['vid']=$getvid;

			$this->load->view('add_vehicle_schedule',$data);
	}


		public function getStationVR()
	{
		$this->load->model('Vehicle_mgmt');
		$getvid=$this->Vehicle_mgmt->getVId();
			$data['vid']=$getvid;

			$this->load->view('add_vehicle_station',$data);
	}


	//addSchedule

	public function addSchedule()
	{
		$data = array(
		'vehicle_id'=>$this->input->post('cmbVehicleId'),
		'route_id'=>$this->input->post('cmbRouteId'),
		'schedule_id'  =>$this->input->post('txtScheduleId'),
		'departure_time' =>$this->input->post('txtDepartureTime'),
		'arrival_time' =>$this->input->post('txtArrivalTime'),
		'date' =>$this->input->post('txtDate')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addSchedule($data);
		
		$this->getScheduleVR();
		$this->load->view('add_vehicle_schedule');
		echo "<h1>"."Vehicle Schedule Added."."</h1>";

	}





	public function getRouteInfo()
	{


	$this->load->model('Vehicle_mgmt');
	$getrouteid=$this->Vehicle_mgmt->getRouteId();
	$getvid=$this->Vehicle_mgmt->getVId();

		$data['route']=$getrouteid;
		$data['vehicle']=$getvid;



		$this->load->view('add_route',$data);
	}



	public function getVRoute(){

	$this->load->model('Vehicle_mgmt');
	$getrouteid=$this->Vehicle_mgmt->getRouteId();
	$data['routes']=$getrouteid;

	$this->load->view('add_vehicle',$data);


	}

	public function addVehicle()
	{
		$data = array(
		'vehicle_id'=>$this->input->post('txtVehicleId'),
		'vehicle_type'  =>$this->input->post('cmbVehicleType'),
		'vehicle_name'  =>$this->input->post('txtVehicleName'),
		'route_id' =>$this->input->post('cmbRouteId')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->registerVehicle($data);
		
		$this->getVRoute();
		$this->load->view('add_vehicle');
		echo "<h1>"."New Vehicle Sucessfully Registered."."</h1>";

	}


	public function addOwner()
	{
		$data = array(
		'vehicle_id'    =>$this->input->post('cmbVehicleId'),
		'phone_number'  =>$this->input->post('txtPhoneNumber'),
		'full_name'  =>$this->input->post('txtOwnerName')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addOwner($data);
		
		$this->getOwnerV();
		$this->load->view('add_owner');
		echo "<h1>"."Owner Sucessfully Registered."."</h1>";

	}


	public function addStation()
	{
		$data = array(
		'vehicle_id'      =>$this->input->post('cmbVehicleId'),
		'station_id'      =>$this->input->post('txtStationId'),
		'station_name'    =>$this->input->post('txtStationName'),
		'station_location' =>$this->input->post('txtStationLocation')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addStation($data);
		
		$this->getStationVR();
		$this->load->view('add_vehicle_station');
		echo "<h1>"."New Station Sucessfully Added."."</h1>";

	}



//details of Vehicle for Owner
	public function getOwnerV()
	{
	$this->load->model('Vehicle_mgmt');
	$getVehicleId=$this->Vehicle_mgmt->getVId();
	$data['vhid']=$getVehicleId;

	$this->load->view('add_owner',$data);

	}


	public function viewVehicle()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectVehicle();

		//$this->getVehicleDetails();

		$this->load->view('update_vehicle',$data);
	}

	public function deleteVehicleDetail()
	{
		$this->load->model('Vehicle_mgmt');
		$getV=$this->Vehicle_mgmt->selectVehicle();
		$data['details']=$getV;
		

		$this->load->view('delete_vehicle',$data);
	}



	public function deleteVehicle()
	{
		$vhid=$this->input->post('cmb_vehicle_name');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->vehicleDelete($vhid);

		
		$this->deleteVehicleDetail();
		echo "<h1>"."Vehicle Info Deleted"."</h1>";

		
	}


	public function updateVehicle(){

		$vid=$this->input->post('id');

		$data = array(
		'vehicle_id'   =>$this->input->post('txtVehicleId'),
		'vehicle_name' =>$this->input->post('vehicle_name'),
		'vehicle_type' =>$this->input->post('cmbVehicleType'),


		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->vehicleUpdate($vid,$data);


		$this->getVehicleDetails();
		echo "<h1>"."Vehicle Info Updated."."</h1>";

	}




	public function getVehicleDetails(){

		$vid=$this->input->get('vid');
		$this->load->model('Vehicle_mgmt');
		$getV=$this->Vehicle_mgmt->getVehicleDetail($vid);
		$data['details']=$getV;
		

		$this->viewVehicle();
		$this->load->view('update_vehicle',$data);
		




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


		
	public function addFare()
	{
		$data = array(
		'fare_id'     =>$this->input->post('txtFareId'),
		'vehicle_id'  =>$this->input->post('vehicle_id_cmb'),
		'route_id'    =>$this->input->post('RouteIdCmb'),
		'from_place'  =>$this->input->post('txtFromPlace'),
		'to_place'    =>$this->input->post('txtToPlace'),
		'normal_fare' =>$this->input->post('txtNormalFare'),
		'student_fare'=>$this->input->post('txtStudentFare')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addFares($data);
		$this->getVehicleRoute();

		echo "<h1>"."New Fare Sucessfully Added"."</h1>";

	}




	public function addRoute()
	{
		$data = array(
		'route_id'    =>$this->input->post('txtRouteId'),
		'route'   	  =>$this->input->post('txtRoute')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->addRoute($data);
		$this->getRouteInfo();

		echo "<h1>"."New Route Sucessfully Added"."</h1>";

	}




}







?>