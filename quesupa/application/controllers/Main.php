<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{$records = $this->admin_model->serviceInfo();
		$this->load->view('user/index',['records'=>$records]);
	}
	public function home()
	{
	$records = $this->admin_model->serviceInfo();
	
		$this->load->view('user/index',['records'=>$records]);
	}
	public function about()
	{
		$this->load->view('user/about');
	}
	public function service()
	{
			$records = $this->admin_model->serviceInfo();
		$this->load->view('user/service1',['records'=>$records]);
	}
	public function blog()
	{
			$records = $this->admin_model->blogs();
		$this->load->view('user/blog1',['records'=>$records]);
	}
	public function contact()
	{
		$this->load->view('user/contact');
	}
}
