<?php
class Admin_model extends CI_Model{
	public function adminLogin($username,$password)
	{
		$q=$this->db->where(['email'=>$username,'password'=>$password])
		->get('user');

		if($q->num_rows())
		{
			return $q->row()->u_id;
		}
		else
		{
			return FALSE;
		}
	}
}