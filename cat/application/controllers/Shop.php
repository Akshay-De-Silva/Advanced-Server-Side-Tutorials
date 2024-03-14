<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	public function index()
	{
		$this->load->view('shop_view');
	}

	public function product($type)
	{
		echo 'Product type: '.$type;
		//$this->load->view('product_view');
	}
}
