<?php
class Panel extends CI_Controller{
	public function index()
	{
		$this->load->view('panel/admin_login');
	}
}
?>