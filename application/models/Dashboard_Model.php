<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Model extends CI_Model{
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function send_approval_request($data){
		return $this->db->insert("approval_request", $data);
	}
	public function get_approval_request(){
		$this->db->where("user_id", $this->session->userdata("login_id"));
		return $this->db->get("approval_request")->result_array();
	}
	public function you_contact(){
		$this->db->select("*");
		$this->db->from("check_user");
		$this->db->join("users", "check_user.proposal_id=users.user_id");
		$this->db->where("check_user.login_id", $this->session->userdata("login_id"));
		return $this->db->get()->result_array();
	}
	public function contact_you(){
		$this->db->select("*");
		$this->db->from("check_user");
		$this->db->join("users", "check_user.login_id=users.user_id");
		$this->db->where("check_user.proposal_id", $this->session->userdata("login_id"));
		return $this->db->get()->result_array();
	}
	public function get_profile_details(){
		$this->db->where("user_id", $this->session->userdata("login_id"));
		return $this->db->get("users")->result_array();
	}
	public function get_views(){
		$this->db->where("proposal_id", $this->session->userdata("login_id"));
		return $this->db->get("views")->result_array();
	}
	/*public function edit_process($data){
		
	}*/
}