<?php
class WordDefinitionController extends CI_Controller {

	public function index() {
		$this->load->view('word_definition_form');
	}

	public function get_definition() {
		$word = $this->input->post('word');
		// Implement logic to fetch the definition based on $word (e.g., database lookup, API call)
		$definition = "Here's the definition for $word"; // Replace with actual definition retrieval
		echo $definition; // Output the definition as a plain string
	}
}
