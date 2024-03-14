<?php

class CatController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Catcatalogue');
	}

	public function index() {
		$cats = $this->Catcatalogue->getcats();
		$this->load->view('CatView', array('cats' => $cats));
	}

	public function vote($cat_id, $vote) {
		if ($this->Catcatalogue->vote($cat_id, $vote)) {
			$this->session->set_flashdata('success', 'Your vote has been submitted!');
		} else {
			$this->session->set_flashdata('error', 'There was an error submitting your vote.');
		}
		redirect(site_url('cat'));
	}

	public function catranking() {
		$cats = $this->Catcatalogue->catsranked();
		$this->load->view('CatRankView', array('cats' => $cats));
	}
}
