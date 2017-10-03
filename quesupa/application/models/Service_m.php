<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_m extends CI_Model{
	public function showAllService(){
		
		$query = $this->db->get('services');
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

	public function updateService(){
		$id = $this->input->post('txtId');
		$field = array(
		'service_name'=>$this->input->post('txtServiceName'),
			'description'=>$this->input->post('txtDescription'),
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
}