<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cities_Model extends CI_Model {
	public function cities_list(){
		$this->db->where("country_id", 167);
		return $this->db->get("cities")->result_array();
	}
}