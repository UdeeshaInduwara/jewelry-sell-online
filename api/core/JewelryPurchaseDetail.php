<?php

class JewelryPurchaseDetail
{
    private $resId;
    private $jewId;
    private $metal;
    private $carat;
    private $weight;
    private $size;
    private $price;
    private $jewTypeId;

    /**
     * JewelryPurchaseDetail constructor.
     * @param $resId
     * @param $jewId
     * @param $metal
     * @param $carat
     * @param $weight
     * @param $size
     * @param $price
     * @param $jewTypeId
     */
    public function __construct($resId, $jewId, $metal, $carat, $weight, $size, $price, $jewTypeId)
    {
        $this->resId = $resId;
        $this->jewId = $jewId;
        $this->metal = $metal;
        $this->carat = $carat;
        $this->weight = $weight;
        $this->size = $size;
        $this->price = $price;
        $this->jewTypeId = $jewTypeId;
    }

    /**
     * @return mixed
     */
    public function getResId()
    {
        return $this->resId;
    }

    /**
     * @param mixed $resId
     */
    public function setResId($resId): void
    {
        $this->resId = $resId;
    }

    /**
     * @return mixed
     */
    public function getJewId()
    {
        return $this->jewId;
    }

    /**
     * @param mixed $jewId
     */
    public function setJewId($jewId): void
    {
        $this->jewId = $jewId;
    }

    /**
     * @return mixed
     */
    public function getMetal()
    {
        return $this->metal;
    }

    /**
     * @param mixed $metal
     */
    public function setMetal($metal): void
    {
        $this->metal = $metal;
    }

    /**
     * @return mixed
     */
    public function getCarat()
    {
        return $this->carat;
    }

    /**
     * @param mixed $carat
     */
    public function setCarat($carat): void
    {
        $this->carat = $carat;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getJewTypeId()
    {
        return $this->jewTypeId;
    }

    /**
     * @param mixed $jewTypeId
     */
    public function setJewTypeId($jewTypeId): void
    {
        $this->jewTypeId = $jewTypeId;
    }


}