<?php 

class M_login extends CI_Model {

	function register($data, $user)
	{
		$this->db->insert('user', $data);
	}

	function username_check($username)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$query = $this->db->get();
		if ($query->num_rows()>0) {
			return false;
		}
		else {
			return true;
		}
	}

	function auth_admin($table, $where)
	{		
		return $this->db->get_where('admin',$where);
	}

	function auth_user($table, $where)
	{		
		return $this->db->get_where('user',$where);
	}

}