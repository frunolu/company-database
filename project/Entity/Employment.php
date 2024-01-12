<?php

class Employment {
    public $employment_id;
    public $person_id;
    public $company_id;

    public function __construct($employment_id, $person_id, $company_id) {
        $this->employment_id = $employment_id;
        $this->person_id = $person_id;
        $this->company_id = $company_id;
    }

}
