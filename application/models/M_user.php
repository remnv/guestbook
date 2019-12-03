<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_user extends CI_Model{
	
	function cek_lvl($username, $password) {
		return $this->db->query("SELECT * FROM m_user WHERE username = '$username' AND password='$password' ");
	}

	function cek_user($username) {
		return $this->db->get_where('m_user', array('username' => $username));
	}

	function getuser($id_user) {
		return $this->db->get_where('m_user', array('id_user' => $id_user));
	}

	function update_password($id_user, $data) {
		$this->db->where('id_user', $id_user);
		$this->db->update('m_user', $data);
	}
}