<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model {

	public function __construct() {
		parent::__construct();
		$this->load->database(); // Automatically load the database library
	}

	public function getFilmsByGenre($genre) {
		$this->db->select('*');
		$this->db->from('films');
		$this->db->where('genre', $genre);
		$query = $this->db->get();

		return ($query->num_rows() >  0) ? $query->result_array() : false;
	}

	public function getAllFilms() {
		$this->db->select('*');
		$this->db->from('films');
		$query = $this->db->get();

		return ($query->num_rows() >  0) ? $query->result_array() : false;
	}
}
?>
