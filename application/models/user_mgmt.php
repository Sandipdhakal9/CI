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
		echo "User Sucessfully Registered";
	}

	public function validateUserLogin($username,$password){

		$sql=$this->db->where(['username'=>$username,'password'=>$password])->get('user');
		if($sql->num_rows()>=1){
				
			return $sql->row()->user_type_id;
			}
			else{
				echo "Sorry Try again";
				//return false;
			}
	}

	public function validateAdminLogin($data){

		$sql=$this->db->where(['username'=>$username,'password'=>$password,'user_type_id'=>$user_type_id])->get('user');
		if($sql->num_rows()>=1){
				return $sql->row()->user_id;
				echo "get login";
			}
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