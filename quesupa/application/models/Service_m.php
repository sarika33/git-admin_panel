<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_m extends CI_Model{
		public function contactForm(){
		$field = array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'message'=>$this->input->post('message'),
			);
		$this->db->insert('contacts', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function showAllService(){
		
		$query = $this->db->get('services');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllUser(){
		
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllBlog(){
		
		$query = $this->db->get('blogs');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function showAllContact(){
		
		$query = $this->db->get('contacts');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

		public function addService(){
		$field = array(
			'service_name'=>$this->input->post('txtServiceName'),
			'description'=>$this->input->post('txtDescription'),
			's_description'=>$this->input->post('txtSDescription'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus')
			);
		$this->db->insert('services', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
		public function addUser(){
		$field = array(
			'name'=>$this->input->post('txtUserName'),
			'email'=>$this->input->post('txtEmail'),
			'password'=>md5($this->input->post('txtPassword')),
			'role'=>$this->input->post('txtRole'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus')
			);
		$this->db->insert('user', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
		public function addBlog(){
		$field = array(
			'blog_name'=>$this->input->post('txtBlogName'),
			'description'=>$this->input->post('txtDescription'),
			's_description'=>$this->input->post('txtSDescription'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus')
			);
		$this->db->insert('blogs', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
			public function addContact(){
		$field = array(
			'name'=>$this->input->post('txtName'),
			'email'=>$this->input->post('txtEmail'),
			'message'=>$this->input->post('txtMessage'),
			);
		$this->db->insert('contacts', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function editService(){
		$id = $this->input->get('id');
		$this->db->where('s_id', $id);
		$query = $this->db->get('services');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function editUser(){
		$id = $this->input->get('id');
		$this->db->where('u_id', $id);
		$query = $this->db->get('user');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

		public function editBlog(){
		$id = $this->input->get('id');
		$this->db->where('b_id', $id);
		$query = $this->db->get('blogs');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function editContact(){
		$id = $this->input->get('id');
		$this->db->where('c_id', $id);
		$query = $this->db->get('contacts');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	public function updateService(){
		$id = $this->input->post('txtId');
		$field = array(
		'service_name'=>$this->input->post('txtServiceName'),
			'description'=>$this->input->post('txtDescription'),
			's_description'=>$this->input->post('txtSDescription'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus'),
		'update_on'=>date('Y-m-d H:i:s')
		);
		$this->db->where('s_id', $id);
		$this->db->update('services', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function updateUser(){
		$id = $this->input->post('txtId');
		$field = array(
		'name'=>$this->input->post('txtUserName'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus'),
		'update_on'=>date('Y-m-d H:i:s')
		);
		$this->db->where('u_id', $id);
		$this->db->update('user', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function updateBlog(){
		$id = $this->input->post('txtId');
		$field = array(
		'blog_name'=>$this->input->post('txtBlogName'),
			'description'=>$this->input->post('txtDescription'),
			's_description'=>$this->input->post('txtSDescription'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus'),
		'update_on'=>date('Y-m-d H:i:s')
		);
		$this->db->where('b_id', $id);
		$this->db->update('blogs', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function updateContact(){
		$id = $this->input->post('txtId');
		$field = array(
		'name'=>$this->input->post('txtName'),
			'email'=>$this->input->post('txtEmail'),
			'message'=>$this->input->post('txtMessage'),
			
		'update_on'=>date('Y-m-d H:i:s')
		);
		$this->db->where('c_id', $id);
		$this->db->update('contacts', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleteService(){
		$id = $this->input->get('id');
		$this->db->where('s_id', $id);
		$this->db->delete('services');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
		function deleteUser(){
		$id = $this->input->get('id');
		$this->db->where('u_id', $id);
		$this->db->delete('user');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	function deleteBlog(){
		$id = $this->input->get('id');
		$this->db->where('b_id', $id);
		$this->db->delete('blogs');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleteContact(){
		$id = $this->input->get('id');
		$this->db->where('c_id', $id);
		$this->db->delete('contacts');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}