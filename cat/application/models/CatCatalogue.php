<?php

class Catcatalogue extends CI_Model {

	public function getcats() {
		$query = $this->db->get('cats');
		return $query->result_array();
	}

	public function vote($cat_id, $vote) {
		$data = array('votes' => $vote == 'Up' ? 'votes + 1' : 'votes - 1');
		$this->db->where('id', $cat_id);
		return $this->db->update('cats', $data);
	}

	public function catsranked() {
		$this->db->order_by('votes', 'DESC');
		$query = $this->db->get('cats');
		return $query->result_array();
	}
}
