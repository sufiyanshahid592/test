<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities_Controller extends CI_Controller {
	public function index(){
		$data = array();
		$data['cities_list'] = $this->Cities_Model->cities_list();
		$data['main_content'] = $this->load->view("user/pakistan-city/pakistan-city", $data, true);
		$this->load->view("user/template/main", $data);
	}
}