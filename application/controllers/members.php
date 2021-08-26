<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->model('family_model');
	}

	public function index(){
		$data["result"] = $this->family_model->get_all_members();
		$this->load->view('member', $data);
	}

	public function new(){
		$this->load->view('add_member');
	}

	public function create(){
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'birthday' => $this->input->post('birthday'),
			'hobby' => $this->input->post('hobby'),
			'contact_number' => $this->input->post('contact_number')
		);
		$this->family_model->member_profile($data);
		redirect('/members');
	}

	public function edit($id)
	{
		$data["row"] = $this->family_model->get_family_data_by_id($id);
		$this->load->view('edit_member', $data);
	}

	public function update($id)
	{
		$this->family_model->update_member($id);
		redirect('/members');
	}

	public function destroy($id){

		$this->family_model->delete($id);
		redirect('/members');
	}
}
