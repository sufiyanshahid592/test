<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}
	public function index($id){
		$data = array();
		$data['get_proposal_details_by_id'] = $this->Profile_Model->get_proposal_details_by_id($id);
		if (!empty($data['get_proposal_details_by_id'][0]['youtube_link'])) {
			header("location:". $data['get_proposal_details_by_id'][0]['youtube_link']);
		}
		$data['main_content'] = $this->load->view("user/profile/profile", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function search_member(){
		redirect('profile/'.$this->input->post("member_id"),'refresh');
	}
	public function show_contact_details(){
		date_default_timezone_set("Asia/Karachi");
		$today = date("d-m-Y");
		$daily_limit = 3;
		$proposal_id = $this->input->post("proposal_id");
		$login_id = $this->session->userdata("login_id");
		$check_user_by_day = $this->Profile_Model->check_user_by_day($login_id, $today);
		$get_proposal_details_by_id = $this->Profile_Model->get_proposal_details_by_id($proposal_id);
		$get_login_user_details = $this->Profile_Model->get_login_user_details();
		$result = $this->Profile_Model->show_contact_details($proposal_id, $login_id);
		if(empty($this->session->userdata("login_id"))){
			?>
				<div class="container">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 modal-content">
							<div class="modal-header">
		        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
		        				<h4 class="modal-title">Errors</h4>
		     				</div>
		     				<div class="modal-body">
		        				<p>Please Login Before any action. <a href="<?php echo base_url("login"); ?>">Go To Login</a></p>
		      				</div>
		      				<div class="modal-footer">
					        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
					      	</div>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			<?php
		}elseif($get_login_user_details[0]['status']==0){
			?>
				<div class="container">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 modal-content">
							<div class="modal-header">
		        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
		        				<h4 class="modal-title">Contact Details</h4>
		     				</div>
		     				<div class="modal-body">
		        				<p>Your Account is not approve you need to go on dashboard to follow account approval instruction.</p>
		      				</div>
		      				<div class="modal-footer">
					        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
					      	</div>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			<?php
		}elseif(count($result)>0){
			$check_user_by_day = $this->Profile_Model->check_user_by_day($login_id, $today);
			?>
				<div class="container">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 modal-content">
							<div class="modal-header">
		        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
		        				<h4 class="modal-title">Contact Details</h4>
		     				</div>
		     				<div class="modal-body">
		        				<p style="color: red; font-size: 11px; text-align: center;">Already You have check this profile. <br> You can check <?php echo $daily_limit-count($check_user_by_day); ?> more profile contact information today</p>
		        				<p>Here is the Contact Number <?php echo $get_proposal_details_by_id[0]['phone_number']; ?></p>
		      				</div>
		      				<div class="modal-footer">
					        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
					      	</div>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			<?php
		}elseif(count($check_user_by_day)==$daily_limit){
			?>
				<div class="container">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 modal-content">
							<div class="modal-header">
		        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
		        				<h4 class="modal-title">Message</h4>
		     				</div>
		     				<div class="modal-body">
		        				<p>Today Limit is Exceed</p>
		      				</div>
		      				<div class="modal-footer">
					        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
					      	</div>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			<?php
		}else{
			$data['proposal_id'] = $proposal_id;
			$data['login_id'] = $login_id;
			$data['date'] = $today;
			$this->Profile_Model->insert_check_user($data);
			$check_user_by_day = $this->Profile_Model->check_user_by_day($login_id, $today);
			?>
				<div class="container">
					<div class="row">
						<div class="col-lg-3"></div>
						<div class="col-lg-6 modal-content">
							<div class="modal-header">
		        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
		        				<h4 class="modal-title">Contact Details</h4>
		     				</div>
		     				<div class="modal-body">
		        				<p>Here is the Contact Number <?php echo $get_proposal_details_by_id[0]['phone_number']; ?></p>
		        				<p>You can check <?php echo $daily_limit-count($check_user_by_day); ?> more profile contact information today</p>
		      				</div>
		      				<div class="modal-footer">
					        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
					      	</div>
						</div>
						<div class="col-lg-3"></div>
					</div>
				</div>
			<?php
		}
	}
}