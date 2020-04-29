<?php
//Custom Yoga_library By Anhul KBrosTechnologies
class Totaluser{

	public function __construct()
	{
		// Set the super object to a local variable for use later
		$this->CI =& get_instance();

		$this->CI->load->model('UserModel');
	}

	function total_user(){
		return $this->CI->UserModel->totalUserCount();
	}

	function total_stars(){
		return $this->CI->UserModel->totalStars();
	}
}

?>