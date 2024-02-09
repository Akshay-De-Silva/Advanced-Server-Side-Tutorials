<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Period_model extends CI_Model {

	// Array to hold the period data
	private $periods = array(
		'Triassic' => array(
			'name' => 'Triassic',
			'land_animals' => 'Archosaurs ("ruling lizards"), therapsids ("mammal-like reptiles")',
			'marine_animals' => 'Plesiosaurs, ichthyosaurs, fish',
			'avian_animals' => '',
			'plant_life' => 'Cycads, ferns, Gingko-like trees, and seed plants'
		),
		'Jurassic' => array(
			'name' => 'Jurassic',
			'land_animals' => 'Dinosaurs (sauropods, therapods), Early mammals, Feathered dinosaurs',
			'marine_animals' => 'Plesiosaurs, fish, squid, marine reptiles',
			'avian_animals' => 'Pterosaurs, Flying insects',
			'plant_life' => 'Ferns, conifers, cycads, club mosses, horsetail, flowering plants'
		),
		'Cretaceous' => array(
			'name' => 'Cretaceous',
			'land_animals' => 'Dinosaurs (sauropods, therapods, raptors, hadrosaurs, herbivorous ceratopsians), Small, tree-dwelling mammals',
			'marine_animals' => 'Plesiosaurs, pliosaurs, mosasaurs, sharks, fish, squid, marine reptiles',
			'avian_animals' => 'Pterosaurs, Flying insects, Feathered birds',
			'plant_life' => 'Huge expansion of flowering plants'
		)
		// You can add more periods here as needed
	);

	/**
	 * Get info about a specific geological period
	 *
	 * @param string $period The name of the period
	 * @return array|null Returns the array of details for the specified period or null if not found
	 */
	public function get_info($period) {
		// Check if the period exists in our array
		if (array_key_exists($period, $this->periods)) {
			return $this->periods[$period];
		}
		return null;
	}

	public function get_all_periods() {
		return $this->periods; // Assuming $this->periods contains all the periods data
	}
}
?>
