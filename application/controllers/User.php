<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
	// parent::__construct();
		
	// }
	function check() {
		$url = $this->input->post('url');
		redirect ($url);
	}
}