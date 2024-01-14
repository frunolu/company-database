<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 *  * @ORM\Entity
 * @ORM\Table(name="Company")
 */
class Company
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $company_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    // Getters and setters...
}
