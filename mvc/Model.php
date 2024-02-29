<?php

class Model
{
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli('localhost', 'root', '', 'serverside');

        if ($this->conn->connect_error) {
            die('Connection failed: ' . $this->conn->connect_error);
        }
    }

    public function getUsers($id = null)
    {
        $sql = 'SELECT id, first_name FROM employee';

        if (!is_null($id)) {
            $sql .= ' WHERE id = ' . $id;
        }

        $result = $this->conn->query($sql);

        $emps = [];

        while ($row = $result->fetch_assoc()) {
            $emps[] = $row;
        }

        return $emps;
    }
}
