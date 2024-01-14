<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;


/**
 *  * @ORM\Entity
 * @ORM\Table(name="Course")
 */
class Course
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $course_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $author_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $active;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="author_id", referencedColumnName="person_id")
     */
    private $author;

    // Getters and setters...
}
