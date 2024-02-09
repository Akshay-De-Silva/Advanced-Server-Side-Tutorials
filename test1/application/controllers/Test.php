<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
	public function index()
	{
		$this->load->view('test_message', array("message" => "Hello World!"));
	}

	public function find()
	{
		$name = $this->input->get('name');
		$data['message'] = "Hello $name!";
		$this->load->view('test_message', $data);
	}
}

