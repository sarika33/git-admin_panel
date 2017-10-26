<?php 

class Main extends CI_Controller{
	public function index(){
		$this->load->view('lan/main');
	}
	public function hn(){
$this->lang->load('hn','hn');
$this->load->view('lan/hn');
	}
	public function mr(){
	$this->lang->load('mr','mr');
$this->load->view('lan/mr');	
	}
}