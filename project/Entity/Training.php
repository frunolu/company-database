<?php

class Training {
    public $training_id;
    public $person_id;
    public $course_id;
    public $certificate;
    public $date_completed;
    public $company_id;

    public function __construct($training_id, $person_id, $course_id, $certificate, $date_completed, $company_id) {
        $this->training_id = $training_id;
        $this->person_id = $person_id;
        $this->course_id = $course_id;
        $this->certificate = $certificate;
        $this->date_completed = $date_completed;
        $this->company_id = $company_id;
    }

}

