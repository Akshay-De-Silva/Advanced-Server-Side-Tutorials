<?php

class Person {
    private $id;
    private $name;
    private $age;
    private $occupation;

    public function __construct($data) {
        $this->id = (isset($data['id'])) ? $data['id'] : null;
        $this->name = (isset($data['name'])) ? $data['name'] : null;
        $this->age = (isset($data['age'])) ? $data['age'] : null;
        $this->occupation = (isset($data['occupation'])) ? $data['occupation'] : null;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getOccupation() {
        return $this->occupation;
    }

    public static function getByName($name) {
        try {
            $db = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $statement = $db->prepare('SELECT * FROM people WHERE name = :name');
            $statement->bindParam(':name', $name);
            $statement->execute();
            $data = $statement->fetch(PDO::FETCH_ASSOC);
            if ($data) {
                return new Person($data);
            } else {
                return null;
            }
        } catch (PDOException $e) {
            // Handle database error
            return null;
        }
    }
}

