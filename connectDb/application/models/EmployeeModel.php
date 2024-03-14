<?php

class EmployeeModel extends CI_Model
{
	public function insertEmployee($data)
	{
		return $this->db->insert('employee', $data);
	}

	public function fetch()
	{
		return $this->db->get('employee')->result();
	}

	public function editEmployee($id)
	{
		return $this->db->get_where('employee', array('id' => $id))->row();
	}

	public function update($id, $data)
	{
		return $this->db->where('id', $id)->update('employee', $data);
	}

	public function delete($id)
	{
		return $this->db->delete('employee', array('id' => $id));
	}

	public function deleteSelectedEmp($checked_id)
	{
		return $this->db->where_in('id', $checked_id)->delete('employee');
	}

}
