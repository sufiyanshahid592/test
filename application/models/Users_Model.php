<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_Model extends CI_Model{

	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function register_process($data){
		return $this->db->insert("users", $data);
	}
	public function check_email_exist($e_mail){
		$this->db->where("e_mail", $e_mail);
		return $this->db->get("users")->result_array();
	}
	public function login_process($e_mail, $password){
		$this->db->where("e_mail", $e_mail);
		$this->db->where("password", $password);
		return $this->db->get("users")->result_array();
	}
	public function get_city_by_id($id){
		$this->db->where("country_id", $id);
		return $this->db->get("cities")->result_array();
	}
	public function update_process($data){
		$this->db->where("user_id", $this->session->userdata("login_id"));
		return $this->db->update("users", $data);
	}
	public function user_details($login_id){
		$this->db->where("user_id", $login_id);
		return $this->db->get("users")->result_array();
	}
}