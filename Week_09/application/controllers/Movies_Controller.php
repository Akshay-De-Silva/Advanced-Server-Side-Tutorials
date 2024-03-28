<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies_Controller extends CI_Controller {
	public function index()
	{
		$this->load->view('movies');
	}
}
