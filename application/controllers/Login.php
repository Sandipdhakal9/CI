<?php
	
/**
* 
*/
class Login extends CI_Controller
{
	
	function index()
	{
		$data['main_content']='login_form';
		$this->load->view('includes/template',$data);
	}

	public function validate_credentials()
	{
		$this->load->model('membership_model');
		$query=$this->membership_model->validate();
		if ($query) {
			$data = array(
				'username'=>$this->input('username'),
				'is_logged_in'=>true

				);
			$this->session->set_userdata($data);
			redirect('members_area');
		}

		else {

			$this->index();
		}
	}
} 
