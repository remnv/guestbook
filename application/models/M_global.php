<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_global extends CI_Model {

	function data_guest() {
		return $this->db->get('v_tamu');
	}

	function data_report_tanggals($tanggal) {
		$this->db->where('tanggal', $tanggal);
		return $this->db->get('v_tamu');
	}

	function data_report() {
		return $this->db->get('v_report');
	}

	function data_report_tanggal($tanggal) {
		$this->db->where('tanggal', $tanggal);
		return $this->db->get('v_report');
	}

	function data_report_date() {
		$query = $this->db->query("
			SELECT 
			tanggal, 
			sum( if( ( ta.id_tipe=1 ), 1, 0))  AS  jml_supporter,
  			sum( if( ( ta.id_tipe=2 ), 1, 0))  AS  jml_player,
			sum( if( ( ta.id_tipe=3 ), 1, 0))  AS  jml_coach,
			count(ta.id_tipe) AS  jml_all
			FROM t_tamu ta
			GROUP BY tanggal
								");
		return $query;
	}

	function delete_excel($tanggal) {
		$this->db->where('tanggal', $tanggal);
		$this->db->delete('t_tamu');
	}
}