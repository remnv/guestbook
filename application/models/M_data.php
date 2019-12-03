<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_data extends CI_Model {

	function list_team() {
		return $this->db->get('m_team');
	}

	function insert_data_team($data) {
		$this->db->insert_batch('m_team', $data);
	}

	function list_lomba() {
		return $this->db->get('m_lomba');
	}

	function insert_data_lomba($data) {
		$this->db->insert_batch('m_lomba', $data);
	}	

	function list_school() {
		return $this->db->get('m_sekolah');
	}

	function insert_data_sekolah($data) {
		$this->db->insert_batch('m_sekolah', $data);
	}	

	// function list_tipe() {
	// 	return $this->db->get('m_tipe');
	// }

	// function insert_data_sekolah($data) {
	// 	$this->db->insert_batch('m_tipe', $data);
	// }
}