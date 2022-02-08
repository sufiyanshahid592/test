<?php 


function count_proposal_by_city($city_name){	
	$db = get_instance();
	$db->db->where("city", $city_name);
	echo count($db->db->get("users")->result_array()); 
}