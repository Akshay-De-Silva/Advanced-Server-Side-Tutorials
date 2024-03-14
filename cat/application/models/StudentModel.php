<?php

class StudentModel extends CI_Model
{
	private $stud_name = "John Doe";
	private $stud_id = "123";

	public function student_show($student, $studentID) {
		$this->stud_name = $student;
		$this->stud_id = $studentID;
	}
	public function studentDetails()
	{
		$student = $this->student_name();
		$studentID = $this->student_id();
		return $student. " with ID: " . $studentID;
	}

	private function student_name()
	{
		return $this->stud_name;
	}

	private function student_id()
	{
		return $this->stud_id;
	}
}
