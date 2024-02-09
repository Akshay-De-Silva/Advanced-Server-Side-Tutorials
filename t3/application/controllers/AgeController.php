<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgeController extends CI_Controller {

	public function index() {
		$this->load->view('age_form');
	}

	public function calculate() {
		$this->load->model('AgeModel');
		$dob = $this->input->post('date_of_birth');
		$age = $this->AgeModel->calculateAge($dob);
		$data['age'] = $age;
		$this->load->view('age_result', $data);
	}
}
?>
