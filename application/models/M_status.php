<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_status extends CI_Model {
	public function select_all() {
		$data = $this->db->get('status');

		return $data->result();
	}

}