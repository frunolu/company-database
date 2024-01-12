<?php

class Course {
    public $course_id;
    public $name;
    public $author_id;
    public $active; // New property

    public function __construct($course_id, $name, $author_id, $active) {
        $this->course_id = $course_id;
        $this->name = $name;
        $this->author_id = $author_id;
        $this->active = $active;
    }

    // Getters and setters
    public function getCourseId() {
        return $this->course_id;
    }

    public function setCourseId($course_id) {
        $this->course_id = $course_id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getAuthorId() {
        return $this->author_id;
    }

    public function setAuthorId($author_id) {
        $this->author_id = $author_id;
    }

    public function getActive() {
        return $this->active;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}
