<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 *  * @ORM\Entity
 * @ORM\Table(name="Employment")
 */
class Employment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $employment_id;

    /**
     * @ORM\ManyToOne(targetEntity="Person")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="person_id")
     */
    private $person;

    /**
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumn(name="company_id", referencedColumnName="company_id")
     */
    private $company;

    // Getters and setters...
}
