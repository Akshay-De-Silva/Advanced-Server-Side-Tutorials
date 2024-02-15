<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {
	public function index() {
		$this->load->view('main_page');
	}

	public function search() {
		// Handle the search functionality here
		// For example, retrieve movies from the database based on the genre
	}

	public function allmovies() {
		// Retrieve and display all movies
		// For example, load a view that lists all movies
		$this->load->view('all_movies');
	}
}
?>
