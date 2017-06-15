<?php
/**
* 
*/
class User_Mgmt extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function registerUser($data){

		$this->db->insert("user",$data);
		return "User Sucessfully Registered";
	}


	public  function updateUser($data)
	{
		$this->db->where('id',1);
		$this->db->update('data',$data);
	}
	
	public function deleteUser($data)
	{
		$this->db->where('id',$this->url->segment(2));

		$this->db->delete('data');
	}
}
?>