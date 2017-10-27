<?php 
class Main extends CI_Controller{

	public function index(){
		$this->load->view('panel/landing_page');

	}
	public function marathi(){
		/*$this->load->view('panel/landing_page_marathi');*/
		$this->lang->load('mr','mr');
		$this->load->view('panel/l');

	}
}
?>