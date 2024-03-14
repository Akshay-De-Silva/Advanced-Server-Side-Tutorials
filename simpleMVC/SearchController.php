<?php

require_once 'Person.php';

class SearchController {

    public function search() {
        $name = (isset($_GET['name'])) ? $_GET['name'] : '';

        if ($name) {
            $person = Person::getByName($name);
            if ($person) {
                require_once '/search.php';
            } else {
                echo '<p>No person found with that name.</p>';
            }
        } else {
            require_once 'search.php';
        }
    }
}

$searchController = new SearchController();
$searchController->search();
