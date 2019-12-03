<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guestbook extends CI_Controller {
	// function __construct(){
	// 	parent::__construct();
	// 	$this->load->model('m_data');
	// 	$this->load->helper('url');
	// }
	
	function index() {
        $d['title']     = 'Guestbook';
        $d['page']      = 'guestbook';
        $d['judul']     = "Pembangunan Cup Guestbook's";
        $d['lsekolah']  = $this->M_guestbook->list_sekolah()->result();
        $d['ltipe']     = $this->M_guestbook->list_tipe()->result();
        $d['llomba']    = $this->M_guestbook->list_lomba()->result();
        $d['lteam']     = $this->M_guestbook->list_team()->result();
        $this->load->view('layout', $d);
    }

    function insert(){
        $nama         = $this->input->post('nama');
        $lomba        = $this->input->post('id_lomba');
        $sekolah      = $this->input->post('id_sekolah');
        $id_team      = $this->input->post('id_team');
        $id_tipe      = $this->input->post('id_tipe');
        $no_hp        = $this->input->post('no_hp');
        $email        = $this->input->post('email');
        $comment      = $this->input->post('comment');
        $button       = $this->input->post('button');
        $tanggal      = date("Y-m-d");

            
                $data = array(
                        'nama_tamu'     => $nama,
                        'id_lomba'      => $lomba,
                        'id_sekolah'    => $sekolah,
                        'id_tipe'       => $id_tipe,
                        'id_team'       => $id_team,
                        'no_hp'         => $no_hp,
                        'tanggal'       => $tanggal,
                        'email'         => $email,
                        'comment'       => $comment
                    );

                if($button == "save"){
                        $save = $this->M_guestbook->insert_data($data);
                        if(!$save){
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Successful . . .</div>");
                        redirect('guestbook');
                        } else {
                            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Failed . . .</div>");
                        redirect('guestbook');
                        }
                    }
        
    }

    // function pesan_hapus($id_project){
    //     $this->m_data->delete_data_project($id_project);
    //     $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to delete</div>");
    //     redirect('data_master/project');
    // }

    function status() {
        $d['title'] 	= "Status Order";
        $d['judul'] 	= "Status Order";
        $d['menu'] 		= "Order";
        $d['submenu'] 	= "Status";
        $d['page']  	= 'od_status';
        $d['project'] = $this->m_report->list_project()->result();
        $this->load->view('layout', $d);
    }
}