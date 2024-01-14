<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 *  * @ORM\Entity
 * @ORM\Table(name="Training")
 */
class Training
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $training_id;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Course")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="course_id")
     */
    private $course;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $certificate;

    /**
     * @ORM\Column(type="date")
     */
    private $date_completed;

    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     */
    private $company;

    // Getters and setters...
}
