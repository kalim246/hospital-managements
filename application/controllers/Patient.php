<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {


	public function index(){

		$this->load->view('hospitalManagement/patients');
	}
	public function add_patient(){
		$this->load->view('hospitalManagement/add-patient');
	}
}