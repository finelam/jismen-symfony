<?php

namespace AppBundle\Entity;

/**
 * Command
 */
class Command
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $paiement;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $postalCode;

    /**
     * @var string
     */
    private $recipient;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set paiement
     *
     * @param string $paiement
     *
     * @return Command
     */
    public function setPaiement($paiement)
    {
        $this->paiement = $paiement;

        return $this;
    }

    /**
     * Get paiement
     *
     * @return string
     */
    public function getPaiement()
    {
        return $this->paiement;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Command
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Command
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return Command
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set recipient
     *
     * @param string $recipient
     *
     * @return Command
     */
    public function setRecipient($recipient)
    {
        $this->recipient = $recipient;

        return $this;
    }

    /**
     * Get recipient
     *
     * @return string
     */
    public function getRecipient()
    {
        return $this->recipient;
    }
}
