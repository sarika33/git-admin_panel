<?php 
class Main extends CI_Controller{

	public function index(){
		$this->lang->load('en','en');
		$this->load->view('panel/l');

	}
	public function marathi(){
		
		$this->lang->load('mr','mr');
		$this->load->view('panel/l');

	}
}
?>