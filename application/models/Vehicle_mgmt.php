<?php
/**
* 
*/
class Vehicle_mgmt extends CI_Model
{
	
	public function selectRoute(){
	
		$this->db->select('*');
		$this->db->from('route');
		$this->db->join('vehicle','route.route_id=vehicle.route_id','inner');
		$query=$this->db->get();
		return $query->result();
	}



	public function selectStationd(){
	
		$this->db->select('*');
		$this->db->from('station');
		// $this->db->join('vehicle','route.route_id=vehicle.route_id','inner');
		$query=$this->db->get();
		return $query->result();
	}



	public function selectOwner(){
	
		$this->db->select('*');
		$this->db->from('owner');
		$this->db->join('vehicle','owner.vehicle_id=vehicle.vehicle_id','inner');

		$query=$this->db->get();
		return $query->result();
	}




		public function selectFare(){
	
		$this->db->select('*');
		$this->db->from('Fare');
		$this->db->join('vehicle','Fare.vehicle_id=vehicle.vehicle_id','inner');

		$this->db->join('route','route.route_id=vehicle.route_id','left');

		$query=$this->db->get();
		return $query->result();
	}




	public function selectSchedule(){
	
		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->join('vehicle','schedule.vehicle_id=vehicle.vehicle_id','inner');

		$this->db->join('route','route.route_id=vehicle.route_id','inner');

		$this->db->join('station','station.vehicle_id=vehicle.vehicle_id','inner');

		$query=$this->db->get();
		return $query->result();
	}




	public function selectNews(){
	
		$this->db->select('*');
		$this->db->from('news_updates');
		$query=$this->db->get();
		return $query->result();
	}




	public function selectVehicle(){
	
		$this->db->select('*');
		$this->db->from('vehicle');
		$query=$this->db->get();
		return $query->result();
	}

	public function vehicleDelete($vhid)
	{
		$this->db->where('vehicle_id',$vhid);
		$this->db->delete('vehicle');
		return "deleted";

	}

	public function fareDelete($fid)
	{
		$this->db->where('fare_id',$fid);
		$this->db->delete('fare');
		return "deleted";

	}


		public function ownerDelete($oid)
	{
		$this->db->where('owner_id',$oid);
		$this->db->delete('owner');
		return "deleted";

	}



	public function scheduleDelete($sid)
	{
		$this->db->where('schedule_id',$sid);
		$this->db->delete('schedule');
		return "deleted";

	}


	public function stationDelete($sid)
	{
		$this->db->where('station_id',$sid);
		$this->db->delete('station');
		return "deleted";

	}



	public function routeDelete($rid)
	{
		$this->db->where('route_id',$rid);
		$this->db->delete('route');
		return "deleted";

	}
	
	public function newsDelete($nid)
	{
		$this->db->where('news_id',$nid);
		$this->db->delete('news_updates');
		return "deleted";

	}


	public function addOwner($data){

		$this->db->insert("owner",$data);
		return "Owner Info Added";
	}
	


		public function addStation($data){

		$this->db->insert("station",$data);
		return "Station Info Added";
	}



	 public function search($search)
	{

    $this->db->select('*');
    $this->db->from('vehicle');
    $this->db->join('route','vehicle.route_id=route.route_id','inner');

	$this->db->join('station','station.vehicle_id=vehicle.vehicle_id','inner');

	$this->db->join('schedule','schedule.vehicle_id=vehicle.vehicle_id','inner');


    $this->db->like('vehicle_name',$search);
    // $this->db->or_like('vehicle_id',$search);
    // $this->db->or_like('route',$search);
    // $this->db->or_like('station',$search);
    $query = $this->db->get();
    return $query->result();

	}



	public function registerVehicle($data){

		$this->db->insert("vehicle",$data);
		return "Vehicle Info Added";
	}

	public function getVehicleDetail($vid){

		$condition = "vehicle_id =" . "'" . $vid . "'";
			$this->db->select('*');
			$this->db->from('vehicle');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}




	public function getFareDetail($fid){

		$condition = "fare_id =" . "'" . $fid . "'";
			$this->db->select('*');
			$this->db->from('fare');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}



		public function getStationDetail($sid){

		$condition = "station_id =" . "'" . $sid . "'";
			$this->db->select('*');
			$this->db->from('station');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}



		public function getOwnerDetail($oid){

		$condition = "owner_id =" . "'" . $oid . "'";
			$this->db->select('*');
			$this->db->from('owner');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}


		public function getScheduleDetail($sid){

		$condition = "schedule_id =" . "'" . $sid . "'";
			$this->db->select('*');
			$this->db->from('schedule');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}




		public function getRouteDetail($rid){

		$condition = "route_id =" . "'" . $rid . "'";
			$this->db->select('*');
			$this->db->from('route');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}


		public function getNewsDetail($nid){

		$condition = "news_id =" . "'" . $nid . "'";
			$this->db->select('*');
			$this->db->from('news_updates');
			$this->db->where($condition);

			$sql = $this->db->get();

			if ($sql->num_rows() == 1) {
			return $sql->result();
			} 

			else
			{

			return false;

			}
		}





	public function addFares($data){

		 $this->db->insert("fare",$data);
		 return "Fare Added";
	}


	public function addRoute($data){

		 $this->db->insert("route",$data);
		 return "Route Added";
	}



	public function addNews($news){

		$this->db->insert("news_updates",$news);
		return "News Updated";
	}


	public function addSchedule($data){

		 $this->db->insert("schedule",$data);
		 return "Schedule Added";
	}
	
	public function getRouteId(){
			return $this->db->get('route');
	}

		public function getVId(){
		return $this->db->get('vehicle');

	}


	public function getSchedule(){
	return $this->db->get('schedule');

	}

	public function ownerDeleteInfo(){
			return $this->db->get('owner');
	}

	public function selectStation(){
			return $this->db->get('station');
	}




	public  function vehicleUpdate($vid,$data)
	{
		$this->db->where('id', $vid);
		$this->db->update('vehicle', $data);
		return "vehicle updated";
	}



	public function fareUpdate($fid,$data)
	{

		$this->db->where('id', $fid);
		$this->db->update('fare', $data);
		return "fare updated";


	}


	public function ownerUpdate($oid,$data)
	{

		$this->db->where('owner_id', $oid);
		$this->db->update('owner', $data);
		return "owner updated";


	}










	public function scheduleUpdate($sid,$data)
	{

		$this->db->where('id', $sid);
		$this->db->update('schedule', $data);
		return "schedule updated";


	}


	public function routeUpdate($rid,$data)
	{

		$this->db->where('id', $rid);
		$this->db->update('route', $data);
		return "route updated";


	}



	public function newsUpdate($nid,$data)
	{

		$this->db->where('news_id', $nid);
		$this->db->update('news_updates', $data);
		return "news updated";


	}


	public function stationUpdate($sid,$data)
	{

		$this->db->where('id', $sid);
		$this->db->update('station', $data);
		return "station updated";


	}



}