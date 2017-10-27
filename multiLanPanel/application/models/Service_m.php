<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_m extends CI_Model{
	
public function showAllPage(){
		
		$query = $this->db->get('pages');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

		public function addPage(){
	
		$field = array(
			'title'=>$this->input->post('txtTitle'),
			'content'=>$this->input->post('txtContent'),
			'slug'=>$this->input->post('txtSlug'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus')
			);
		$this->db->insert('pages', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
			
	public function editPage(){
		$id = $this->input->get('id');
		$this->db->where('p_id', $id);
		$query = $this->db->get('pages');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
		public function updatePage(){
		$id = $this->input->post('txtId');
		$field = array(
		'title'=>$this->input->post('txtTitle'),
			'content'=>$this->input->post('txtContent'),
			'slug'=>$this->input->post('txtSlug'),
			'created_by'=>$this->input->post('txtCreatedBy'),
			'status'=>$this->input->post('txtStatus'),
		'update_on'=>date('Y-m-d H:i:s')
		);
		$this->db->where('p_id', $id);
		$this->db->update('pages', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	function deletePage(){
		$id = $this->input->get('id');
		$this->db->where('p_id', $id);
		$this->db->delete('pages');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
		function deleteMenu(){
		$id = $this->input->get('id');
		$this->db->where('m_id', $id);
		$this->db->delete('menu');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
}