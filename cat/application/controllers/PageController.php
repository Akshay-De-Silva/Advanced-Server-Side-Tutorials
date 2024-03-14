<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function demo()
	{
		$this->load->view('about');
	}

	public function blog($param = '')
	{
		echo $param;
		$this->load->view('blog_view');
	}
}
