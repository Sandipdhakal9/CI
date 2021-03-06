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

		$this->load->view('select_update',$data);
	}

	public function selectFare()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectFare();


		//$this->getVehicleDetails();

		$this->load->view('select_fare',$data);
	}	


		public function selectStation()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectStationd();


		//$this->getVehicleDetails();

		$this->load->view('select_station',$data);
	}



	public function selectRoute()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectRoute();


		//$this->getVehicleDetails();

		$this->load->view('select_route',$data);
	}


	public function selectSchedule()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->getSchedule();


		//$this->getVehicleDetails();

		$this->load->view('select_schedule',$data);
	}


		public function selectOwner()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectOwner();


		//$this->getVehicleDetails();

		$this->load->view('select_owner',$data);
	}


	public function selectNews()
	{
		$this->load->model('Vehicle_mgmt');
		$data['records']=$this->Vehicle_mgmt->selectNews();


		//$this->getVehicleDetails();

		$this->load->view('select_news',$data);
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


	public function deleteFare()
	{
		$fid=$this->input->get('fid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->fareDelete($fid);

		
		$this->selectFare();
		echo "<h1>"."Fare Details Deleted"."</h1>";

		
	}



	public function deleteOwner()
	{
		$oid=$this->input->get('oid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->ownerDelete($oid);

		
		$this->selectOwner();
		echo "<h1>"."Owner Details Deleted"."</h1>";

		
	}





		public function deleteSchedule()
	{
		$sid=$this->input->get('sid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->scheduleDelete($sid);

		
		$this->selectSchedule();
		echo "<h1>"."Schedule Details Deleted"."</h1>";

		
	}

	public function deleteRoute()
	{
		$rid=$this->input->get('rid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->routeDelete($rid);

		
		$this->selectRoute();
		echo "<h1>"."Route Details Deleted"."</h1>";

		
	}


	public function deleteNews()
	{
		$nid=$this->input->get('nid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->newsDelete($nid);

		
		$this->selectNews();
		echo "<h1>"."News Details Deleted"."</h1>";

		
	}



	public function deleteStation()
	{
		$sid=$this->input->get('sid');
		//$id=$this->input->get('id');
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->stationDelete($sid);

		
		$this->selectStation();
		echo "<h1>"."Station Details Deleted"."</h1>";

		
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


		$this->viewVehicle();
		echo "<h1>"."Vehicle Info Updated."."</h1>";

	}


	public function updateFare(){

		$fid=$this->input->post('id');

		$data = array(
		'vehicle_id'   =>$this->input->post('cmbVehicleId'),
		'fare_id' =>$this->input->post('txtFareId'),
		'route_id' =>$this->input->post('cmbRouteId'),
		'from_place'   =>$this->input->post('txtFromPlace'),
		'to_place' =>$this->input->post('txtToPlace'),
		'student_fare' =>$this->input->post('txtStudentFare'),
		'normal_fare' =>$this->input->post('txtNormalFare')


		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->fareUpdate($fid,$data);


		$this->selectFare();
		echo "<h1>"."Fare Sucessfully Updated."."</h1>";

	}



	public function updateOwner(){

		$oid=$this->input->post('id');

		$data = array(
		'vehicle_id'   =>$this->input->post('cmbVehicleId'),
		'full_name' =>$this->input->post('txtOwnerName'),
		'phone_number' =>$this->input->post('txtPhoneNumber')


		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->ownerUpdate($oid,$data);


		$this->selectOwner();
		echo "<h1>"."Owner Sucessfully Updated."."</h1>";

	}










	public function updateSchedule(){

		$sid=$this->input->post('id');

		$data = array(
		'vehicle_id'   =>$this->input->post('cmbVehicleId'),
		'schedule_id' =>$this->input->post('txtScheduleId'),
		'route_id' =>$this->input->post('cmbRouteId'),
		'departure_time'   =>$this->input->post('txtDepartureTime'),
		'arrival_time' =>$this->input->post('txtArrivalTime'),
		'date' =>$this->input->post('txtDate')


		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->scheduleUpdate($sid,$data);


		$this->selectSchedule();
		echo "<h1>"."Schedule Sucessfully Updated."."</h1>";

	}

	public function updateRoute(){

		$rid=$this->input->post('id');

		$data = array(
		'route_id'   =>$this->input->post('txtRouteId'),
		'route' =>$this->input->post('txtRoute')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->routeUpdate($rid,$data);


		$this->selectRoute();
		echo "<h1>"."Route Sucessfully Updated."."</h1>";

	}

	public function updateNews(){

		$nid=$this->input->post('id');

		$data = array(
		'news_text'   =>$this->input->post('txtNews')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->newsUpdate($nid,$data);


		$this->selectNews();
		echo "<h1>"."News Sucessfully Updated."."</h1>";

	}








	public function updateStation(){

		$sid=$this->input->post('id');

		$data = array(
		'station_id'   =>$this->input->post('txtStationId'),
		'station_name'   =>$this->input->post('txtStationName'),
		'station_location'   =>$this->input->post('txtStationLocation'),
		'vehicle_id' =>$this->input->post('cmbVehicleId')

		);
		$this->load->model('Vehicle_mgmt');
		$this->Vehicle_mgmt->stationUpdate($sid,$data);


		$this->selectStation();
		echo "<h1>"."Station Sucessfully Updated."."</h1>";

	}





	public function getVehicleDetails(){

		$vid=$this->input->get('vid');
		$this->load->model('Vehicle_mgmt');
		$getV=$this->Vehicle_mgmt->getVehicleDetail($vid);
		$data['vdetails']=$getV;
		
		$this->load->view('update_vehicle',$data);

	}


		public function getFareDetails(){

		$fid=$this->input->get('fid');
		$this->load->model('Vehicle_mgmt');

		$getF=$this->Vehicle_mgmt->getFareDetail($fid);
		$getrouteid=$this->Vehicle_mgmt->getRouteId();
		$getvid=$this->Vehicle_mgmt->getVId();

			$data['rid']=$getrouteid;
			$data['vid']=$getvid;
			$data['fdetails']=$getF;


		$this->load->view('update_fare',$data);

	}



		public function getStationDetails(){

		$sid=$this->input->get('sid');
		$this->load->model('Vehicle_mgmt');

		$getS=$this->Vehicle_mgmt->getStationDetail($sid);
		$getvid=$this->Vehicle_mgmt->getVId();

			$data['vid']=$getvid;
			$data['sdetails']=$getS;


		$this->load->view('update_station',$data);

	}




		public function getOwnerDetails(){

		$oid=$this->input->get('oid');
		$this->load->model('Vehicle_mgmt');

		$getO=$this->Vehicle_mgmt->getOwnerDetail($oid);
		$getvid=$this->Vehicle_mgmt->getVId();

			$data['vid']=$getvid;
			$data['odetails']=$getO;


		$this->load->view('update_owner',$data);

	}







	public function getScheduleDetails(){

		$sid=$this->input->get('sid');
		$this->load->model('Vehicle_mgmt');

		$getS=$this->Vehicle_mgmt->getScheduleDetail($sid);
		$getrouteid=$this->Vehicle_mgmt->getRouteId();
		$getvid=$this->Vehicle_mgmt->getVId();

			$data['rid']=$getrouteid;
			$data['vid']=$getvid;
			$data['sdetails']=$getS;


		$this->load->view('update_schedule',$data);

	}




		public function getRouteDetails(){

		$rid=$this->input->get('rid');
		$this->load->model('Vehicle_mgmt');

		$getR=$this->Vehicle_mgmt->getRouteDetail($rid);

			$data['rdetails']=$getR;


		$this->load->view('update_route',$data);

	}



		public function getNewsDetails(){

		$nid=$this->input->get('nid');
		$this->load->model('Vehicle_mgmt');

		$getN=$this->Vehicle_mgmt->getNewsDetail($nid);

			$data['ndetails']=$getN;


		$this->load->view('update_news',$data);

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