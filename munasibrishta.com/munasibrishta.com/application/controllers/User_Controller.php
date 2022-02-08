<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}
	public function register(){
		$data = array();
		$id = 167;
		$data['get_city_by_id'] = $this->Users_Model->get_city_by_id($id);
		$data['main_content'] = $this->load->view("user/login-and-register/register", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function register_process(){
		$data["created_by"] = $this->input->post("created_by");
		$data["full_name"] = $this->input->post("full_name");
		$data["age"] = $this->input->post("age");
		$data["height"] = $this->input->post("height");
		$data["gender"] = $this->input->post("gender");
		$data["marital_status"] = $this->input->post("marital_status");
		$data["total_brothers"] = $this->input->post("total_brothers");
		$data["married_brothers"] = $this->input->post("married_brothers");
		$data["total_sister"] = $this->input->post("total_sister");
		$data["married_sister"] = $this->input->post("married_sister");
		$data["highest_education"] = $this->input->post("highest_education");
		$data["profession"] = $this->input->post("profession");
		$data["income"] = $this->input->post("income");
		$data["employed_in"] = $this->input->post("employed_in");
		$data["religion"] = $this->input->post("religion");
		$data["cast"] = $this->input->post("cast");
		$data["mother_tongue"] = $this->input->post("mother_tongue");
		$data["phone_number"] = $this->input->post("phone_number");
		$data["country"] = $this->input->post("country");
		$data["city"] = $this->input->post("city");
		$data["about_me"] = $this->input->post("about_me");
		$data["requirements"] = $this->input->post("requirements");
		if(!empty($this->input->post("e_mail"))){
			$data["e_mail"] = $this->input->post("e_mail");
		}
		if(!empty($this->input->post("password")) OR $this->input->post("change_password_checkbox")=="on"){
			$data["password"] = md5($this->input->post("password"));
		}
		$data['status'] = 1;
		if(!empty($this->session->userdata("login_id"))){
			$user_details = $this->Users_Model->user_details($this->session->userdata("login_id"));
			if($user_details[0]['status']=0){
				//$data['status'] = 0;
			}else{
				//$data['status'] = 2;
			}
			$result = $this->Users_Model->update_process($data);
			if($result==1){
				$result = 2;
			}
		}else{
			//$data['status'] = 0;
			date_default_timezone_set("Asia/Karachi");
			$data["registration_date"] = date("d-m-Y");
			$result = $this->Users_Model->register_process($data);
		}
		if($result==1){
			echo 1;
		}elseif($result==2){
			echo 2;
		}else{
			echo 0;
		}
	}
	public function account_created_succcessfully(){
		?>
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 modal-content">
						<div class="modal-header">
	        				<h4 class="modal-title">Registration Successfull!...</h4>
	     				</div>
	     				<div class="modal-body">
	        				<p>Your Profile Register Successfully!...</p>
	        				<!-- <p>Your Profile Register Successfully!... After check your profile will be approve shortly. </p> -->
	        				<!-- <img width="100%" src="<?php //echo base_url("assets/user/img/paid.jpg"); ?>"> -->
	      				</div>
	      				<div class="modal-footer">
				        	<a href="<?php echo base_url('login'); ?>" class="btn btn-primary">Go To Login</a>
				      	</div>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		<?php
	}
	public function edit_success_message(){
		?>
			<div class="container">
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-6 modal-content">
						<div class="modal-header">
	        				<h4 class="modal-title">Update Successfull!...</h4>
	     				</div>
	     				<div class="modal-body">
	        				<p>Your Profile Update Successfully!...</p>
	        				<!-- <p>Your Profile Update Successfully and due to update profile your account is unactivate after checking your account will be activate shortly.</p> -->
	      				</div>
	      				<div class="modal-footer">
				        	<a href="<?php echo base_url('dashboard'); ?>" class="btn btn-primary">Go To Dashboard</a>
				      	</div>
					</div>
					<div class="col-lg-3"></div>
				</div>
			</div>
		<?php
	}
	public function check_email_exist(){
		$e_mail = $this->input->post("e_mail");
		$result = count($this->Users_Model->check_email_exist($e_mail));
		if($result==0){
			echo "true";
		}elseif($result==1){
			echo "false";
		}
	}
	public function login(){
		$data = array();
		$data['main_content'] = $this->load->view("user/login-and-register/login", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function login_process(){
		$e_mail = $this->input->post("e_mail");
		$password = md5($this->input->post("password"));
		$result = $this->Users_Model->login_process($e_mail, $password);
		if(count($result)>0){
			$this->session->set_userdata("login_id", $result[0]['user_id']);
			redirect('dashboard','refresh');
		}else{
			$this->session->set_flashdata('error', 'Please Enter Correct E-mail and Password');
			redirect('login','refresh');
		}
	}
	public function logout(){
		$this->session->unset_userdata("login_id");
		redirect('login','refresh');
	}
}
