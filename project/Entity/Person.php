<?php

class Person {
    public $person_id;
    public $name;
    public $rights;

    public function __construct($person_id, $name, $rights) {
        $this->person_id = $person_id;
        $this->name = $name;
        $this->rights = $rights;
    }

    public function getPersonId() {
        return $this->person_id;
    }

    public function setPersonId($person_id) {
        $this->person_id = $person_id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getRights() {
        return $this->rights;
    }

    public function setRights($rights) {
        $this->rights = $rights;
    }
}
