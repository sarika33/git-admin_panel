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
	/*echo "<pre>";
	print_r($records);
	exit();*/
		$this->load->view('user/index',['records'=>$records]);
	}
	public function about()
	{
		$this->load->view('user/about');
	}
	public function service()
	{
		$this->load->view('user/service');
	}
	public function blog()
	{
			$records = $this->admin_model->blogs();
		$this->load->view('user/blog',['records'=>$records]);
	}
	public function contact()
	{
		$this->load->view('user/contact');
	}
}
