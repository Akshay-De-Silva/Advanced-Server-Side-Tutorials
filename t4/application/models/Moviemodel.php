<?php

class Moviemodel extends CI_Model {

	public function get_by_genre($genre) {
		$this->db->where('genre', $genre);
		$query = $this->db->get('movies');
		return $query->result_array() ?: false;
	}

	public function get_all() {
		$query = $this->db->get('movies');
		return $query->result_array();
	}

	public function search($search_param, $search_field) {
		$this->db->where($search_field, $search_param);
		$query = $this->db->get('movies');
		return $query->result_array() ?: false;
	}
}

