<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Student extends CI_Controller {

	public function index() {
		// Define student details
		$data = array(
			'name' => 'John Doe',
			'course' => 'Computer Science',
			'picture' => 'http://example.com/path/to/image.jpg'
		);


		// Load the view and pass the student details
		$this->load->view('student_details', $data);
	}
}


