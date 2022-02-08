<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("Search_Model");
	}
	public function index(){
		$data = array();
		$data['search_data'] = $this->input->get();
		$data['get_data_by_filter'] = $this->Search_Model->get_data_by_filter($data['search_data']);
		$data['get_total_filter_data'] = $this->Search_Model->get_total_filter_data($data['search_data']);
		$this->load->library('pagination');
		$query = "";
		if(!empty($this->input->get("looking"))){
			$query .= "&looking=".$this->input->get("looking");
		}
		if(!empty($this->input->get("age_from"))){
			$query .= "&age_from=".$this->input->get("age_from");
		}
		if(!empty($this->input->get("age_to"))){
			$query .= "&age_to=".$this->input->get("age_to");
		}
		if(!empty($this->input->get("religion"))){
			$query .= "&religion=".$this->input->get("religion");
		}
		if(!empty($this->input->get("mother_tongue"))){
			$query .= "&mother_tongue=".$this->input->get("mother_tongue");
		}
		if(!empty($this->input->get("marital_status"))){
			$query .= "&marital_status=".$this->input->get("marital_status");
		}
		if(!empty($this->input->get("city"))){
			$query .= "&city=".$this->input->get("city");
		}
		$config['base_url'] = base_url("search?".$query);
		$config['enable_query_strings'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['total_rows'] = count($data['get_total_filter_data']);
		$config['per_page'] = 12;
		$config['uri_segment'] = 3;
		$this->pagination->initialize($config);
		if ($this->input->get("per_page")) {
			$page = ($this->input->get("per_page") - 1) * $config['per_page'];
		}else{
			$page = 0;
		}
		$data['get_data_by_pagination'] = $this->Search_Model->get_data_by_pagination($data['search_data'], $config['per_page'], $page);
		$data['get_all_cities'] = $this->Search_Model->get_all_cities();
		$data['main_content'] = $this->load->view("user/search/search", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function filter_data(){
		$exploder = explode("&", $this->input->post("form_data"));
		foreach($exploder as $key=>$value){
			$small_explode = explode("=", $value);
			$form_data[$small_explode[0]] = $small_explode[1];
		}
		foreach($form_data as $key=>$value){
			$data[$key] = $value;
		}
		$get_total_filter_data = $this->Search_Model->get_total_filter_data($data);
		if($this->input->post("total_data_loaded")){
			$load_from  = $this->input->post("total_data_loaded");
			$load_limit = 12;
			$get_data_by_filter = $this->Search_Model->get_data_by_load_more($data, $load_from, $load_limit);
		}else{
			$get_data_by_filter = $this->Search_Model->get_data_by_filter($data);
		}
		if(count($get_data_by_filter)>0){
			foreach($get_data_by_filter as $value){ ?>
				<div class="col-lg-4 single-proposal-gallery">
					<div class="row">
						<div class="proposal-img text-center">
							<?php if($value['gender']=="Male"){ ?>
								<img src="<?php echo base_url("assets/user/img/male-avatar.jpg"); ?>">
							<?php }elseif($value['gender']=="Female"){ ?>
								<img src="<?php echo base_url("assets/user/img/female-avatar.jpg"); ?>">
							<?php } ?>
						</div>
						<div class="proposal-details">
							<div class="row">
								<div class="col-lg-12 candidate-name">
									<label>Name:</label>
									<span><?php echo $value['full_name']; ?></span>
								</div>
								<div class="col-lg-12 candidate-age">
									<label>Age:</label>
									<span><?php echo $value['age']; ?>,</span>
									<label>Height:</label>
									<span><?php echo $value['height']; ?></span>
								</div>
								<div class="col-lg-12 religion">
									<label>Religion:</label>
									<span><?php echo $value['religion']; ?></span>
								</div>
								<div class="col-lg-12 candidate-age">
									<label>Cast:</label>
									<span><?php echo $value['cast']; ?>,</span>
									<label>City:</label>
									<span>Lahore</span>
								</div>
								<div class="col-lg-12 horizontal-line">
									<hr>
								</div>
								<div class="col-lg-12 proposal-detail-btn">
									<a href="<?php echo base_url("profile/".$value['user_id']); ?>" class="btn">Show Complete Details</a>
								</div>
							</div>
						</div>
					</div>
				</div>
		<?php 
			}
		}else{
			echo "<div style='clear:both;'></div><div class='alert alert-danger'>No More Data Available.</div>";
		}
	}
	public function count_data(){
		$exploder = explode("&", $this->input->post("form_data"));
		foreach($exploder as $key=>$value){
			$small_explode = explode("=", $value);
			$form_data[$small_explode[0]] = $small_explode[1];
		}
		foreach($form_data as $key=>$value){
			$data[$key] = $value;
		}
		if($this->input->post("total_data_loaded")){
			$get_total_filter_data = count($this->Search_Model->get_total_filter_data($data));
			$load_from  = $this->input->post("total_data_loaded");
			if($get_total_filter_data<=$load_from){
				echo 0;
			}else{
				echo 1;
			}
		}else{
			$get_total_filter_data = count($this->Search_Model->get_total_filter_data($data));
			$get_data_by_filter = count($this->Search_Model->get_data_by_filter($data));
			if($get_total_filter_data==$get_data_by_filter){
				echo 0;
			}else{
				echo 1;
			}
		}
	}
}
