<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Profile_Model extends CI_Model{

	public function __construct(){

		parent:: __construct();

		$this->load->database();

	}

	public function get_proposal_details_by_id($id){

		$this->db->where("user_id", $id);
		$this->db->where("status", 1);

		return $this->db->get("users")->result_array();

	}

	public function show_contact_details($proposal_id, $login_id){

		$this->db->where("login_id", $login_id);

		$this->db->where("proposal_id", $proposal_id);

		return $this->db->get("check_user")->result_array();

	}

	public function insert_check_user($data){

		return $this->db->insert("check_user", $data);

	}

	public function check_user_by_day($login_id, $today){

		$this->db->where("login_id", $login_id);

		$this->db->where("date", $today);

		return $this->db->get("check_user")->result_array();

	}

	public function get_login_user_details(){

		$this->db->where("user_id", $this->session->userdata("login_id"));

		return $this->db->get("users")->result_array();

	}

}