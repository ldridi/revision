<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @var string
     *
     * @ORM\Column(name="nameEvent", type="string", length=255)
     */
    private $nameEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="locationEvent", type="string", length=255)
     */
    private $locationEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptionEvent", type="string", length=255)
     */
    private $descriptionEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="priceEvent", type="decimal", precision=10, scale=2)
     */
    private $priceEvent;


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
     * Set nameEvent
     *
     * @param string $nameEvent
     *
     * @return Event
     */
    public function setNameEvent($nameEvent)
    {
        $this->nameEvent = $nameEvent;

        return $this;
    }

    /**
     * Get nameEvent
     *
     * @return string
     */
    public function getNameEvent()
    {
        return $this->nameEvent;
    }

    /**
     * Set locationEvent
     *
     * @param string $locationEvent
     *
     * @return Event
     */
    public function setLocationEvent($locationEvent)
    {
        $this->locationEvent = $locationEvent;

        return $this;
    }

    /**
     * Get locationEvent
     *
     * @return string
     */
    public function getLocationEvent()
    {
        return $this->locationEvent;
    }

    /**
     * Set descriptionEvent
     *
     * @param string $descriptionEvent
     *
     * @return Event
     */
    public function setDescriptionEvent($descriptionEvent)
    {
        $this->descriptionEvent = $descriptionEvent;

        return $this;
    }

    /**
     * Get descriptionEvent
     *
     * @return string
     */
    public function getDescriptionEvent()
    {
        return $this->descriptionEvent;
    }

    /**
     * Set priceEvent
     *
     * @param string $priceEvent
     *
     * @return Event
     */
    public function setPriceEvent($priceEvent)
    {
        $this->priceEvent = $priceEvent;

        return $this;
    }

    /**
     * Get priceEvent
     *
     * @return string
     */
    public function getPriceEvent()
    {
        return $this->priceEvent;
    }
}
