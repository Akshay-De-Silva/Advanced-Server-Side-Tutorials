<?php
class AgeModel extends CI_Model {

	public function calculateAge($dob) {
		$today = date_create(date("Y-m-d"));
		$birthdate = date_create($dob);
		$diff = date_diff($birthdate, $today);
		return $diff->format('%y years, %m months, %d days');
	}
}
?>
