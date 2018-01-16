<<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agama extends CI_Model {
	public function select_all() {
		$this->db->select('*');
		$this->db->from('agama');

		$data = $this->db->get();

		return $data->result();
	}

}