<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cast_Controller extends CI_Controller {
	public function index(){
		$data = array();
		$data['main_content'] = $this->load->view("user/list-of-casts/list-of-casts", $data, true);
		$this->load->view("user/template/main", $data);
	}
}