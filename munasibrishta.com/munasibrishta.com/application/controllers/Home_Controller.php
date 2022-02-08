<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
	}
	public function index(){
		$data = array();
		$data['get_all_proposals'] = $this->Home_Model->get_all_proposals();
		$data['main_content'] = $this->load->view("user/home/home", $data, true);
		$this->load->view("user/template/main", $data);
	}
	public function sitemap(){
		header("Content-Type: text/xml;charset=iso-8859-1");
		echo '<?xml version="1.0" encoding="UTF-8" ?>';
		echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
	?>
		<url>
	      	<loc><?php echo base_url(); ?></loc>
	      	<priority>1.0</priority>
	   	</url>
	   	<url>
	      	<loc><?php echo base_url('login'); ?></loc>
	      	<priority>1.0</priority>
	   	</url>
	   	<url>
	      	<loc><?php echo base_url('register'); ?></loc>
	      	<priority>1.0</priority>
	   	</url>
	   	<url>
	      	<loc><?php echo base_url('list-of-casts'); ?></loc>
	      	<priority>1.0</priority>
	   	</url>
	   	<url>
	      	<loc><?php echo base_url('search'); ?></loc>
	      	<priority>1.0</priority>
	   	</url>
	<?php
		echo "</urlset> ";
	}
}
