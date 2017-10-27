<?php
class Service extends CI_Controller{
	function __construct(){
		parent:: __construct();
		if( ! $this->session->userdata('u_id') )
			return redirect('accesstoadmin');
		$this->load->model('service_m', 'm');
	}
	

		
	
public function showAllPage(){
		$result = $this->m->showAllPage();
		echo json_encode($result);
	}



		public function addPage(){
		$result = $this->m->addPage();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	
	public function editPage(){
		$result = $this->m->editPage();
		echo json_encode($result);
	}

	public function updatePage(){
		$result = $this->m->updatePage();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
		public function deletePage(){
		$result = $this->m->deletePage();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}



		public function page(){
		$this->load->view('panel/header');
		$this->load->view('panel/page_view');
		$this->load->view('panel/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('u_id');
		return redirect('login');
	}

}
?>