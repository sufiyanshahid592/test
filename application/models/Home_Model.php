<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Model extends CI_Model{
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function get_all_proposals(){
		$this->db->order_by("user_id desc");
		$this->db->limit(8);
		$this->db->where("status", 1);
		return $this->db->get("users")->result_array();
	}
}