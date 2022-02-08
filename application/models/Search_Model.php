<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Model extends CI_Model{
	public function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	public function get_data_by_filter($search_data){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->order_by("user_id desc");
		$this->db->limit(12);
		if(!empty($search_data['looking'])){
			$this->db->where("gender", $search_data['looking']);
		}
		if(!empty($search_data['age_from'])){
			$this->db->where("age >=", $search_data['age_from']);
		}
		if(!empty($search_data['age_to'])){
			$this->db->where("age <=", $search_data['age_to']);
		}
		if(!empty($search_data['mother_tongue'])){
			$this->db->where("mother_tongue", $search_data['mother_tongue']);
		}
		if(!empty($search_data['cast'])){
			$this->db->where("cast", $search_data['cast']);
		}
		if(!empty($search_data['religion'])){
			$this->db->where("religion", $search_data['religion']);
		}
		if(!empty($search_data['marital_status'])){
			$this->db->where("marital_status", $search_data['marital_status']);
		}
		if(!empty($search_data['city'])){
			$this->db->where("city", $search_data['city']);
		}
		$this->db->where("users.status", 1);
		return $this->db->get()->result_array();
	}
	public function get_data_by_load_more($search_data, $load_from, $load_limit){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->order_by("user_id desc");
		$this->db->limit($load_limit,$load_from);
		if(!empty($search_data['looking'])){
			$this->db->where("gender", $search_data['looking']);
		}
		if(!empty($search_data['age_from'])){
			$this->db->where("age >=", $search_data['age_from']);
		}
		if(!empty($search_data['age_to'])){
			$this->db->where("age <=", $search_data['age_to']);
		}
		if(!empty($search_data['mother_tongue'])){
			$this->db->where("mother_tongue", $search_data['mother_tongue']);
		}
		if(!empty($search_data['cast'])){
			$this->db->where("cast", $search_data['cast']);
		}
		if(!empty($search_data['religion'])){
			$this->db->where("religion", $search_data['religion']);
		}
		if(!empty($search_data['marital_status'])){
			$this->db->where("marital_status", $search_data['marital_status']);
		}
		if(!empty($search_data['city'])){
			$this->db->where("city", $search_data['city']);
		}
		$this->db->where("users.status", 1);
		return $this->db->get()->result_array();
	}
	public function get_total_filter_data($search_data){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->order_by("user_id desc");
		if(!empty($search_data['looking'])){
			$this->db->where("gender", $search_data['looking']);
		}
		if(!empty($search_data['age_from'])){
			$this->db->where("age >=", $search_data['age_from']);
		}
		if(!empty($search_data['age_to'])){
			$this->db->where("age <=", $search_data['age_to']);
		}
		if(!empty($search_data['mother_tongue'])){
			$this->db->where("mother_tongue", $search_data['mother_tongue']);
		}
		if(!empty($search_data['cast'])){
			$this->db->where("cast", $search_data['cast']);
		}
		if(!empty($search_data['religion'])){
			$this->db->where("religion", $search_data['religion']);
		}
		if(!empty($search_data['marital_status'])){
			$this->db->where("marital_status", $search_data['marital_status']);
		}
		if(!empty($search_data['city'])){
			$this->db->where("city", $search_data['city']);
		}
		$this->db->where("users.status", 1);
		return $this->db->get()->result_array();
	}
	public function get_data_by_pagination($search_data, $per_page, $page){
		$this->db->select("*");
		$this->db->from("users");
		$this->db->order_by("user_id desc");
		$this->db->limit($per_page, $page);
		if(!empty($search_data['looking'])){
			$this->db->where("gender", $search_data['looking']);
		}
		if(!empty($search_data['age_from'])){
			$this->db->where("age >=", $search_data['age_from']);
		}
		if(!empty($search_data['age_to'])){
			$this->db->where("age <=", $search_data['age_to']);
		}
		if(!empty($search_data['mother_tongue'])){
			$this->db->where("mother_tongue", $search_data['mother_tongue']);
		}
		if(!empty($search_data['cast'])){
			$this->db->where("cast", $search_data['cast']);
		}
		if(!empty($search_data['religion'])){
			$this->db->where("religion", $search_data['religion']);
		}
		if(!empty($search_data['marital_status'])){
			$this->db->where("marital_status", $search_data['marital_status']);
		}
		if(!empty($search_data['city'])){
			$this->db->where("city", $search_data['city']);
		}
		$this->db->where("users.status", 1);
		return $this->db->get()->result_array();
	}
	public function get_all_cities(){
		$this->db->where("country_id", 167);
		return $this->db->get("cities")->result_array();
	}
}