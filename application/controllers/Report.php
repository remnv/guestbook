<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('M_global');
		$this->load->helper('url');
	}

	function index(){
		show_404();
	}
	
	function guest() {
		$d['title']     = "Guest Report's";
		$d['judul'] 	= "Guest Report's";
		$d['page'] 		= 'report_guest';
		$d['menu'] 		= "Report";
        $d['submenu'] 	= "Guest";
        $d['data']		= $this->M_global->data_guest()->result();
		$this->load->view('layout', $d);
	}	

	function report() {
		$d['title']     = "Reports";
		$d['judul'] 	= "Reports";
		$d['page'] 		= 'report_report';
		$d['menu'] 		= "Report";
        $d['submenu'] 	= "Report";
        $d['data']		= $this->M_global->data_report_date()->result();
		$this->load->view('layout', $d);
	}

	function cetak_report() {
			$header = 
			'<table style="width:100%;">
					<tr style:"border:1;">
						<td rowspan="2" style="color:#e74c3c;width:20%;"><img src="'.base_url().'/berkas/dist/img/litos.png"  width="60"></td>
						<td style="color:#e74c3c;width:80%;font-size:18pt;font-family:times;text-align:center;font-weight:bold;" colspan="4"><b>Daftar tamu listosphere 2016</b></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="color:#000;width:80%;font-size:8pt;font-family:times;text-align:center;" colspan="4">Jalan Balai Pustaka Baru 1, Rawamangun,</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td style="color:#000;width:80%;font-size:8pt;font-family:times;text-align:center;" colspan="4">Pulo Gadung, Jakarta Timur, Daerah Khusus Ibukota Jakarta 13220</td>
						<td></td>
						<td></td>
					</tr>
					
			</table>

			<table style="width:100%;">
					<tr>
						<td colspan="3" style="height:20px"></td>
					</tr>
					<tr>
						<td></td>
						<td style="border-bottom: 4px solid #e74c3c;padding: 2px 0px 2px 0px;text-align:center;height=100px;font-size:15px;font-weight:bold; width:40%">Daftar tamu listosphere 2016</td>
						<td></td>
					</tr>
					
			</table>
			';

			$header_table = '<table>
					<tr style="text-align:center;">
						<td style="height:30px" colspan="5"></td>
					</tr>

					<tr style="text-align:center;">
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;width:5%">No.</td>
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;">Schools</td>
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;">Name</td>
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;">No. HP</td>			
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;">Email</td>
						<td style="border:1px solid #000;font-weight:bold;background-color:#e74c3c;color:white;">Comment</td>
					</tr>';
			$tanggal	= $this->input->post('tanggal');
			$query = $this->M_global->data_report_tanggal($tanggal)->result();
			$no =1;
			$content_table = '';
			foreach($query as $q) {

				if($no % 2 == 0) {
					$color = "rgb(238,238,238)";
				} else {
					$color = "white";
				}

				$content_table .= '
					<tr style="text-align:center; background-color:'.$color.';">
						<td style="border:1px solid #000; ">'.$no++.'.</td>
						<td style="border:1px solid #000; ">'.$q->nama_sekolah.'</td>
						<td style="border:1px solid #000; ">'.$q->nama_tamu.'</td>
						<td style="border:1px solid #000; ">'.$q->no_hp.'</td>
						<td style="border:1px solid #000; ">'.$q->email.'</td>
						<td style="border:1px solid #000; ">'.$q->comment.'</td>
					</tr>

				';
			}
			$total_table = '
					<tr ">
						<td style="border:1px solid #000;" text-align:left;>Total</td>
						<td colspan="5" style="text-align:center; border:1px solid #000; font-weight:bold; background-color:#e74c3c; color:white;">=COUNT(INDIRECT(CONCATENATE("A7:A",ROW()-1)))</td>
					</tr>

			';

			$date=date("d-F-Y");
			$filename="Guest Report $date.xls";
			$footer_table = '</table>';

			header("Content-Disposition: attachment; filename=\"$filename\"");
  			header("Content-Type: application/vnd.ms-excel");
			echo $header.$header_table.$content_table.$total_table.$footer_table;

			$option 	= $this->input->post('option');
			$tanggal 	= $this->input->post('tanggal');
			if ($option == "yes") {
				$this->M_global->delete_excel($tanggal);
			}
		}

}