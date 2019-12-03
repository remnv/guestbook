<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class M_guestbook extends CI_Model{


	function cek($db,$jenis,$data) {
		$this->db->like($jenis, $data);
		return $this->db->get($db);
	}

	function insert_select($db,$jenis,$data) {
		$this->db->insert($db, array($jenis => $data));
	}

	function insert_data($data) {
		$this->db->insert('t_tamu', $data);
	}
	
	function list_tipe() {
		return $this->db->get('m_tipe');
	}
	function list_lomba() {
		return $this->db->get('m_lomba');
	}
	function list_team() {
		return $this->db->get('m_team');
	}
	function list_sekolah() {
		return $this->db->get('m_sekolah');
	}

}