<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentController extends CI_Controller {

	public function index()
	{
		$this->load->model('StudentModel', 'stud');
		$data['student'] = $this->stud->studentDetails();
		$this->load->view('student_view', $data);
	}

	public function set($name, $id)
	{
		$this->load->model('StudentModel', 'stud');
		$this->stud->student_show($name, $id);
		$this->index();
	}
}
