<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

	}


	public function index()
	{

		$this->load->view('user_list');
	}

	public function login()
	{

		$this->load->view('login');
	}



	public function save_record(){

		$this->form_validation->set_rules('first_name' , 'First Name' ,'required'); 
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		//$this->form_validation->set_rules('email', 'Email', 'valid_email|is_unique[users.email]');
		if($this->form_validation->run()==FALSE)
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('');
		}
		else
		{	
			$this->db->where('id',$id);
			$update = $this->db->update('users',$_POST);

		}
	}	
}
