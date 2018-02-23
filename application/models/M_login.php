<?php 

class M_login extends CI_Model {

	function admin_auth($admin,$where)
	{		
		return $this->db->get_where($admin,$where);
	}

}