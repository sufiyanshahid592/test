<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		if(empty($this->session->userdata("login_id"))){
			redirect('login','refresh');
		}
	}
	public function dashboard(){
		$data = array();
		$data['get_approval_request'] = $this->Dashboard_Model->get_approval_request();
		$data['contact_you'] = $this->Dashboard_Model->contact_you();
		$data['you_contact'] = $this->Dashboard_Model->you_contact();
		$data['get_profile_details'] = $this->Dashboard_Model->get_profile_details();
		$data['get_views'] = $this->Dashboard_Model->get_views();
		$data['main_content'] = $this->load->view("user/dashboard/dashboard", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function send_approval_request(){
		$data['user_id'] = $this->session->userdata("login_id");
		$data['payment_method'] = $this->input->post("payment_method");
		$data['txid'] = $this->input->post("txid");
		$result = $this->Dashboard_Model->send_approval_request($data);
		if($result==1){
			echo '<div class="alert alert-warning">Your approval request submited successsfully. After checking your profile will be approve shortly.</div>';
		}
	}
	public function edit_profile(){
		$data = array();
		$id = 167;
		$data['get_city_by_id'] = $this->Users_Model->get_city_by_id($id);
		$data['get_profile_details'] = $this->Dashboard_Model->get_profile_details();
		$data['main_content'] = $this->load->view("user/dashboard/edit-profile", $data, true);
		$this->load->view("user/template/main", $data);
	}
	/*public function edit_process(){
		$data["created_by"] = $this->input->post("created_by");
		$data["full_name"] = $this->input->post("full_name");
		$data["age"] = $this->input->post("age");
		$data["height"] = $this->input->post("height");
		$data["gender"] = $this->input->post("gender");
		$data["marital_status"] = $this->input->post("marital_status");
		$data["highest_education"] = $this->input->post("highest_education");
		$data["employed_in"] = $this->input->post("employed_in");
		$data["religion"] = $this->input->post("religion");
		$data["cast"] = $this->input->post("cast");
		$data["mother_tongue"] = $this->input->post("mother_tongue");
		$data["phone_number"] = $this->input->post("phone_number");
		$data["Country"] = $this->input->post("Country");
		$data["city"] = $this->input->post("city");
		$data["about_me"] = $this->input->post("about_me");
		$data["e_mail"] = $this->input->post("e_mail");
		if(!empty($this->session->userdata("password"))){
			$data["password"] = md5($this->input->post("password"));
		}
		$data["status"] = 2;
		$result = $this->Dashboard_Model->edit_process($data);
		if($result==1){
			$this->session->set_flashdata('error', 'Your profile is unactive due to edit profile after check we will approve shortly.');
			redirect('dashboard','refresh');
		}
	}*/
}