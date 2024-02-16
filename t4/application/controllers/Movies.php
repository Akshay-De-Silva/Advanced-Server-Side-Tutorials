<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {

	public function index() {
		$this->load->view('movieview');
	}

	public function search() {
		$search_param = $this->input->post('genre'); // Adapt for IMDB rating if preferred
		$this->_handle_search($search_param, 'genre'); // Reusable search handler
	}

	public function allmovies() {
		$movies = $this->_get_all_movies(); // Reusable retrieval method
		$this->load->view('movies_list_view', array('movies' => $movies));
	}

	private function _handle_search($search_param, $search_field) {
		if (empty($search_param)) {
			$this->load->view('error_view', array('message' => 'Please enter a search term.'));
			return;
		}

		$movies = $this->Moviemodel->search($search_param, $search_field);

		if ($movies) {
			$this->load->view('movie_details_view', array('movies' => $movies));
		} else {
			$this->load->view('error_view', array('message' => 'No movies found with that ' . $search_field . '.'));
		}
	}

	private function _get_all_movies() {
		$movies = $this->Moviemodel->get_all();
		if ($movies) {
			return $movies;
		} else {
			$this->load->view('error_view', array('message' => 'No movies found in the database.'));
			return false; // Prevent further processing if no movies found
		}
	}
}



