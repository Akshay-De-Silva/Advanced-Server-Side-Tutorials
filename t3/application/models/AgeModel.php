<?php
class AgeModel extends CI_Model {

	public function calculateAge($dob) {
		$today = date("Y-m-d");
		$diff = date_diff(date_create($dob), date_create($today));
		return $diff->format('%y');
	}
}
?>
