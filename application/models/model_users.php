<?php
/**
* 
*/
class Model_users extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

function getUsers(){
	$query=$this->db->query('select * from user'); //returns object 
	if ($query->num_rows()>0) {
		return $query->result();
	} else {
		return Null;
	}


}

}

?>