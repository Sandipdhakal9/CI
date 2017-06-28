<?php
/**
* 
*/
class Vehicle_mgmt extends CI_Model
{
	
	public function selectRoute(){
	
		$this->db->select('*');
		$this->db->from('route');
		$this->db->join('vehicle','route.vehicle_id=vehicle.vehicle_id','left');
		$query=$this->db->get();
		return $query->result();
	}

	public function selectOwner(){
	
		$this->db->select('*');
		$this->db->from('owner');
		$this->db->join('vehicle','owner.vehicle_id=vehicle.vehicle_id','left');

		$query=$this->db->get();
		return $query->result();
	}


		public function selectFare(){
	
		$this->db->select('*');
		$this->db->from('Fare');
		$this->db->join('vehicle','Fare.vehicle_id=vehicle.vehicle_id','left');

		$this->db->join('route','route.vehicle_id=vehicle.vehicle_id','left');

		$query=$this->db->get();
		return $query->result();
	}

	public function selectSchedule(){
	
		$this->db->select('*');
		$this->db->from('schedule');
		$this->db->join('vehicle','schedule.vehicle_id=vehicle.vehicle_id','left');

		$this->db->join('route','route.vehicle_id=vehicle.vehicle_id','left');

		$this->db->join('station','station.vehicle_id=vehicle.vehicle_id','left');

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
	

	public function registerVehicle($data){

		$this->db->insert("vehicle",$data);
		return "Vehicle Info Added";
	}



	public function addNews($news){

		$this->db->insert("news_updates",$news);
		return "News Updated";
	}



	
	public function getVehicleRoutes(){

		$query=$this->db->get('vehicle');
		if($query->num_rows() > 0){
			return $query->result();
	}
}
}