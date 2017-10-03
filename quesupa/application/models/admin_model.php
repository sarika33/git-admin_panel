<?php
class Admin_model extends CI_Model{
	public function adminLogin($username,$password)
	{
		$q=$this->db->where(['email'=>$username,'password'=>$password])
		->get('user');

		if($q->num_rows())
		{
			return $q->row()->u_id;
			//return TRUE;
		}
		
		else
		{
			return FALSE;
		}
	}

	public function add($post)
	{
		$this->db->insert('services', $post);
	}
	public function addblog($post)
	{
		$this->db->insert('blogs', $post);
	}

	public function addUser($post)
	{
		$this->db->insert('user', $post);
	}

	public function serviceInfo()
	{
		$query = $this->db->select(['s_id','service_name','description','s_description','image','status','created_on','created_by','update_by','update_on'])
		->get('services');
		return $query->result();	
	}

	public function userInfo()
	{
		$query = $this->db->select(['u_id','name','role','email','status','created_on','created_by','update_by','update_on'])
		->get('user');
		return $query->result();	
	}

		public function blogs()
	{
		$query = $this->db->select(['b_id','blog_name','description','s_description','image','status','created_on','created_by','update_by','update_on'])
		->get('blogs');
		return $query->result();	
	}

	public function findService($s_id)
	{
		$q = $this->db->select(['s_id','service_name','description','image','status','created_on','created_by','update_by','update_on'])
		->where('s_id', $s_id)
		->get('services');
		return $q->row();
	}
	public function findBlog($b_id)
	{
		$q = $this->db->select(['b_id','blog_name','description','image','status','created_on','created_by','update_by','update_on'])
		->where('b_id', $b_id)
		->get('blogs');
		return $q->row();
	}
	public function findUser($u_id)
	{
		$q = $this->db->select(['u_id','name','role','email','status','created_on','created_by','update_by','update_on'])
		->where('u_id', $u_id)
		->get('user');
		return $q->row();
	}

	public function deleteService($s_id)
	{
		return $this->db->delete('services',['s_id'=>$s_id]);
	}


	public function deleteBlog($b_id)
	{
		return $this->db->delete('blogs',['b_id'=>$b_id]);
	}

	public function deleteUser($u_id)
	{
		return $this->db->delete('user',['u_id'=>$u_id]);
	}
	
	public function updateService($s_id, Array $service)
	{
		return $this->db
		->where('s_id', $s_id)
		->update('services', $service);
	}

	public function updateBlog($b_id, Array $blog)
	{
		return $this->db
		->where('b_id', $b_id)
		->update('blogs', $blog);
	}

	public function updateUser($u_id, Array $user)
	{
		return $this->db
		->where('u_id', $u_id)
		->update('user', $user);
	}
}
?>