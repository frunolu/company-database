<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 *  * @ORM\Entity
 * @ORM\Table(name="Person")
 */
class Person
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $person_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=10)
     * @ORM\Check(constraints={"rights" : {"admin", "user"}})
     */
    private $rights;

    // Getters and setters...
}
