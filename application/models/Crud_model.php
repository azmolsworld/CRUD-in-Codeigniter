<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	public function get_all_records(){
		$query = $this->db->get('crud');
		return $query->result();
	}

	public function add_record($data){
		$this->db->insert('crud', $data);
	}

	public function update_record($data){
		$this->db->where('id', '$id');
		$this->db->update('crud', $data);
	}

	public function delete(){
		$row = $this->uri->segment(3);
		$this->db->where('id', $row)
		$this->db->delete('crud');
	}
}