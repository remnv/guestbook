<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	 
class Data_master extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}
	
	function team() {
        $d['title'] 	= "Input Team";
        $d['judul'] 	= "Input Team";
        $d['menu'] 		= "Data Master";
        $d['submenu'] 	= "Teams";
        $d['page']  	= 'dm_team';
        $d['data'] = $this->M_data->list_team()->result();
        $this->load->view('layout', $d);
    }

    function team_add(){
        $nama_team       = $this->input->post('nama_team');
        $button          = $this->input->post('button');
       
                $data = array();
                for($a=0; $a< count($nama_team); $a++) {
                if ($nama_team[$a] != "") {
                    $data[] = array(
                            'nama_team' => $nama_team[$a]
                            );
                    }
                }

                if(!$button == ""){
                        $save = $this->M_data->insert_data_team($data);
                        if(!$save){
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to add</div>");
                        redirect('data_master/team');
                        } else {
                            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to add</div>");
                        redirect('data_master/team');
                        }
                    }
                    // } elseif ($id_project != "") {
                    //     $save = $this->m_data->update_data_project($data,$id_project);
                    //     if(!$save){
                    //     $this->m_data->update_data_project($data,$id_project);
                    //     $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to update</div>");
                    //     redirect('data_master/project/'.$id_project);
                    //     }else{
                    //         $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to update</div>");
                    //     redirect('data_master/project/'.$id_event_name);
                    //     }
                    // } 
        
    }

    function competition() {
        $d['title']     = "Input Competiton";
        $d['judul']     = "Input Competiton";
        $d['menu']      = "Data Master";
        $d['submenu']   = "Competitons";
        $d['page']      = 'dm_lomba';
        $d['data'] = $this->M_data->list_lomba()->result();
        $this->load->view('layout', $d);
    }

    function competition_add(){
        $nama_lomba      = $this->input->post('nama_lomba');
        $button          = $this->input->post('button');

                $data = array();
                for($a=0; $a< count($nama_lomba); $a++) {
                if ($nama_lomba[$a] != "") {
                    $data[] = array(
                            'nama_lomba' => $nama_lomba[$a]
                            );
                    }
                }

                if(!$button == ""){
                        $save = $this->M_data->insert_data_lomba($data);
                        if(!$save){
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to add</div>");
                        redirect('data_master/competition');
                        } else {
                            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to add</div>");
                        redirect('data_master/competition');
                        }
                    }
                    // } elseif ($id_project != "") {
                    //     $save = $this->m_data->update_data_project($data,$id_project);
                    //     if(!$save){
                    //     $this->m_data->update_data_project($data,$id_project);
                    //     $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to update</div>");
                    //     redirect('data_master/project/'.$id_project);
                    //     }else{
                    //         $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to update</div>");
                    //     redirect('data_master/project/'.$id_event_name);
                    //     }
                    // } 
        
    }

    function school() {
        $d['title']     = "Input School";
        $d['judul']     = "Input School";
        $d['menu']      = "Data Master";
        $d['submenu']   = "Schools";
        $d['page']      = 'dm_school';
        $d['data'] = $this->M_data->list_school()->result();
        $this->load->view('layout', $d);
    }

    function school_add(){
        $nama_school       = $this->input->post('nama_sekolah');
        $button          = $this->input->post('button');
       
                $data = array();
                for($a=0; $a< count($nama_school); $a++) {
                if ($nama_school[$a] != "") {
                    $data[] = array(
                            'nama_sekolah' => $nama_school[$a]
                            );
                    }
                }

                if(!$button == ""){
                        $save = $this->M_data->insert_data_sekolah($data);
                        if(!$save){
                        $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to add</div>");
                        redirect('data_master/school');
                        } else {
                            $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to add</div>");
                        redirect('data_master/school');
                        }
                    }
                    // } elseif ($id_project != "") {
                    //     $save = $this->m_data->update_data_project($data,$id_project);
                    //     if(!$save){
                    //     $this->m_data->update_data_project($data,$id_project);
                    //     $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to update</div>");
                    //     redirect('data_master/project/'.$id_project);
                    //     }else{
                    //         $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to update</div>");
                    //     redirect('data_master/project/'.$id_event_name);
                    //     }
                    // } 
        
    }

    // function tipe() {
    //     $d['title']     = "Input Type";
    //     $d['judul']     = "Input Type";
    //     $d['menu']      = "Data Master";
    //     $d['submenu']   = "Type";
    //     $d['page']      = 'dm_tipe';
    //     $d['data'] = $this->M_data->list_tipe()->result();
    //     $this->load->view('layout', $d);
    // }

    // function tipe_add(){
    //     $nama_tipe       = $this->input->post('nama_tipe');
    //     $button          = $this->input->post('button');
       
    //             $data = array();
    //             for($a=0; $a< count($nama_tipe); $a++) {
    //             if ($nama_tipe[$a] != "") {
    //                 $data[] = array(
    //                         'nama_tipe' => $nama_tipe[$a]
    //                         );
    //                 }
    //             }

    //             if(!$button == ""){
    //                     $save = $this->M_data->insert_data_tipe($data);
    //                     if(!$save){
    //                     $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to add</div>");
    //                     redirect('data_master/tipe');
    //                     } else {
    //                         $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to add</div>");
    //                     redirect('data_master/tipe');
    //                     }
    //                 }
    //                 // } elseif ($id_project != "") {
    //                 //     $save = $this->m_data->update_data_project($data,$id_project);
    //                 //     if(!$save){
    //                 //     $this->m_data->update_data_project($data,$id_project);
    //                 //     $this->session->set_flashdata("pesan", "<div class=\"alert alert-success\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project successful to update</div>");
    //                 //     redirect('data_master/project/'.$id_project);
    //                 //     }else{
    //                 //         $this->session->set_flashdata("pesan", "<div class=\"alert alert-danger\" id=\"alert\"><i class=\"glyphicon glyphicon-ok\"></i> Project failed to update</div>");
    //                 //     redirect('data_master/project/'.$id_event_name);
    //                 //     }
    //                 // } 
        
    // }
    
}