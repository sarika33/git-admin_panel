<?php
class Service extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('service_m', 'm');
	}
	public function index(){
		$this->load->view('layout/header');
		$this->load->view('admin/ajax_view');
		$this->load->view('layout/footer');
	}

	public function showAllService(){
		$result = $this->m->showAllService();
		echo json_encode($result);
	}

	public function addService(){
		$result = $this->m->addService();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function editService(){
		$result = $this->m->editService();
		echo json_encode($result);
	}

		public function updateService(){
		$result = $this->m->updateService();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
		public function deleteService(){
		$result = $this->m->deleteService();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

}
?>