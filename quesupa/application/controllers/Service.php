<?php
class Service extends CI_Controller{
	function __construct(){
		parent:: __construct();
		$this->load->model('service_m', 'm');
	}
	public function index(){
		$this->load->view('panel/header');
		$this->load->view('panel/service_view');
		$this->load->view('panel/footer');
	}

	public function showAllService(){
		$result = $this->m->showAllService();
		echo json_encode($result);
	}
	public function showAllUser(){
		$result = $this->m->showAllUser();
		echo json_encode($result);
	}
	public function showAllBlog(){
		$result = $this->m->showAllBlog();
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
	public function addUser(){
		$result = $this->m->addUser();
		$msg['success'] = false;
		$msg['type'] = 'add';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function addBlog(){
		$result = $this->m->addBlog();
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
	public function editUser(){
		$result = $this->m->editUser();
		echo json_encode($result);
	}
	public function editBlog(){
		$result = $this->m->editBlog();
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
	public function updateUser(){
		$result = $this->m->updateUser();
		$msg['success'] = false;
		$msg['type'] = 'update';
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function updateBlog(){
		$result = $this->m->updateBlog();
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
	public function deleteUser(){
		$result = $this->m->deleteUser();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	public function deleteBlog(){
		$result = $this->m->deleteBlog();
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}


	public function user(){
		$this->load->view('panel/header');
		$this->load->view('panel/user_view');
		$this->load->view('panel/footer');
	}

	public function blog(){
		$this->load->view('panel/header');
		$this->load->view('panel/blog_view');
		$this->load->view('panel/footer');
	}
	public function logout()
	{
		$this->session->unset_userdata('u_id');
		return redirect('login');
	}

}
?>