<?php

namespace AppBundle\Entity;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $prixAchat;

    /**
     * @var float
     */
    private $prixVenteHt;

    /**
     * @var float
     */
    private $prixVenteTtc;

    /**
     * @var integer
     */
    private $stock;


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
     * Set name
     *
     * @param string $name
     *
     * @return Product
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
     * Set prixAchat
     *
     * @param float $prixAchat
     *
     * @return Product
     */
    public function setPrixAchat($prixAchat)
    {
        $this->prixAchat = $prixAchat;

        return $this;
    }

    /**
     * Get prixAchat
     *
     * @return float
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * Set prixVenteHt
     *
     * @param float $prixVenteHt
     *
     * @return Product
     */
    public function setPrixVenteHt($prixVenteHt)
    {
        $this->prixVenteHt = $prixVenteHt;

        return $this;
    }

    /**
     * Get prixVenteHt
     *
     * @return float
     */
    public function getPrixVenteHt()
    {
        return $this->prixVenteHt;
    }

    /**
     * Set prixVenteTtc
     *
     * @param float $prixVenteTtc
     *
     * @return Product
     */
    public function setPrixVenteTtc($prixVenteTtc)
    {
        $this->prixVenteTtc = $prixVenteTtc;

        return $this;
    }

    /**
     * Get prixVenteTtc
     *
     * @return float
     */
    public function getPrixVenteTtc()
    {
        return $this->prixVenteTtc;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }
}
