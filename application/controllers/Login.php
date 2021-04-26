<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index(){

		$this->load->view('hospitalManagement/login');
	}
	public function dashboard(){
		$this->load->view('hospitalManagement/index');
	}

	public function profile(){
		$this->load->view('hospitalManagement/profile');
	}

	public function editprofile(){
		$this->load->view('hospitalManagement/edit-profile');
	}
	public function logout(){
		redirect('login');
	}
}
