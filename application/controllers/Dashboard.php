<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct() {
		parent::__construct();
        $this->load->model('M_global');
        $this->load->helper('url');
        // $this->load->library('Datatables_ssp');
	}

	function index() {
		$d['title'] 	= 'Guestbook';
		$d['page'] 		= 'report_guest';
		$d['judul'] 	= "Pembangunan Cup Guestbook's";
		$d['menu'] 		= "Report";
        $d['submenu'] 	= "Guest";
        $d['data']		= $this->M_global->data_report_tanggals(date("Y-m-d"))->result();
		$this->load->view('layout', $d);
	}

	public function search() {
		$datas = $this->M_global->data_report()->result();
		
		$data = array();
		foreach ($datas as $d) {
		$data[] = array(
                            'nama_sekolah'	=>	$d->nama_sekolah,
                            'nama_lomba'	=>	$d->nama_lomba,
                            'nama_team'		=>	$d->nama_team,
                            'nama_tamu'		=>	$d->nama_tamu,
                            'nama_tipe'		=>	$d->nama_tipe,
                            'no_hp'			=>	$d->no_hp
                     );
             
		}

	  //   $results = array(
	  //           "sEcho" => 1,
	  //       "iTotalRecords" => count($data),
	  //       "iTotalDisplayRecords" => count($data),
	  //         "aaData"=>$data);
			// /*while($row = $result->fetch_array(MYSQLI_ASSOC)){
			//   $results["data"][] = $row ;
			// }*/
		// var_dump($data);
		// exit();
		echo json_encode($data);
	}

}
