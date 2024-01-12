<?php


class Company {
    public $company_id;
    public $name;

    public function __construct($company_id, $name) {
        $this->company_id = $company_id;
        $this->name = $name;
    }

    // Getters and setters
    public function getCompanyId() {
        return $this->company_id;
    }

    public function setCompanyId($company_id) {
        $this->company_id = $company_id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}


