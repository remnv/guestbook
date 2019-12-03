<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function index()
	{
		$this->load->view('dashboard');
	}
	
	function masuk()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$lvl = $this->input->post('lvl');

		
	
		/* script untuk membuat user pertama dengan enkripsi password 
		$data = array(
				'username' => $username,
				'password' => $this->encrypt->encode($password)
			);

		$insert = $this->db->insert('m_user', $data);
		$this->session->set_flashdata('pesan', 'User berhasil ditambahkan.');
		redirect('login/reseller');
		*/

		//$cek_user = $this->M_login->cek_user($username)->result();
		$cek_user = $this->M_login->cek_user($username)->num_rows();

		if($cek_user == 0){
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password salah.');
			redirect('login');

		} else {

		    $cek_user = $this->M_login->cek_user($username)->result();
		

		foreach($cek_user as $cu)
		{
			$pass_db = $this->encrypt->decode($cu->password);
		}	

		if($password == $pass_db)
		{

			$cekuser = $this->M_login->cek_user($username);
			foreach($cekuser->result() as $sess){
				$sess_data['id_user'] = $sess->id_user;
				$sess_data['username'] = $sess->username;
				$sess_data['password'] = $sess->password;
				$sess_data['nama'] = $sess->nama;
				$sess_data['lvl'] = $sess->lvl;
				$this->session->set_userdata($sess_data);
			}

			if($this->session->userdata('lvl') == 'reseller') {
				redirect('reseller');
			} elseif($this->session->userdata('lvl') == 'pionir') {
				redirect('pionir');
			}
			
		}

		else
		{
			$this->session->set_flashdata('pesan', 'Maaf, kombinasi username dan password salah.');
			redirect('login');

		}
	}
	}
	
	function keluar()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}