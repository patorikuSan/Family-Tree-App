<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class family_model extends CI_model {
	public function __construct(){
		$this->load->database();
	}

	public function member_profile($data){
		$this->db->insert('family', $data);
	}

	public function get_all_members(){
		$query = $this->db->query('SELECT * FROM family');
		return $query->result();
	}

	public function get_family_data_by_id($id){
		$query = $this->db->query('SELECT * FROM family WHERE `id` =' .$id);
		return $query->row();
	}

	public function update_member($id){
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'birthday' => $this->input->post('birthday'),
			'hobby' => $this->input->post('hobby'),
			'contact_number' => $this->input->post('contact_number')
		);
		$this->db->where('id', $id);
		$this->db->update("family", $data);
	}

	public function delete($id){
		$this->db->where('id', $id);
		$this->db->delete("family");
	}


}