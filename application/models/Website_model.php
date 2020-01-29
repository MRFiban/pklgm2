<?php
class Website_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get_website( = FALSE)
	{

		if ($slug === FALSE)
		{
			$query = $this->db->get('website');
			return $query->result_array();
		}

		$query = $this->db->get_where
	}
}