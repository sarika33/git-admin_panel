<?php
class Admin extends CI_Controller{

	public function admin_login(){
$this->load->view('admin/admin_login');
	}
	public function adminValidation()
	{
		$this->form_validation->set_rules('username','User name','required');
		$this->form_validation->set_rules('password','Password','required');


		if($this->form_validation->run())
		{
			
			$username=$this->input->post('username');
			$password=md5($this->input->post('password'));

			$login_id = $this->admin_model->adminLogin($username, $password);
			if( $login_id)
			{
				$this->session->set_userdata('u_id',$login_id);
				$this->load->view('admin/dashboard');

			}
			else
			{
				$this->load->view('admin/dashboard');
			}
		}
		else
		{
			echo "Try Again!!!";
		}
	}
	

	public function login(){
$this->load->view('admin/admin_login');
	}
}
