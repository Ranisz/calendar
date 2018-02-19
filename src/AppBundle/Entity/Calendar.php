<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendar
 *
 * @ORM\Table(name="calendar")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalendarRepository")
 */
class Calendar
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var type 
     * 
     * @ORM\ManyToOne(targetEntity="User", inversedBy="calendars")
     */
    private $user;
    
    /**
     * @var type 
     * 
     * @ORM\OneToMany(targetEntity="Event", mappedBy="calendar")
     */
    private $events;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="descrption", type="text", nullable=true)
     */
    private $descrption;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Calendar
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set descrption
     *
     * @param string $descrption
     *
     * @return Calendar
     */
    public function setDescrption($descrption)
    {
        $this->descrption = $descrption;

        return $this;
    }

    /**
     * Get descrption
     *
     * @return string
     */
    public function getDescrption()
    {
        return $this->descrption;
    }
}

