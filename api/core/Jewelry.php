<?php

class Jewelry
{
    private $jewelryId;
    private $metal;
    private $carat;
    private $weight;
    private $size;
    private $price;
    private $jewTypeId;
    private $imgPath;
    private $jewDescription;

    /**
     * Jewelry constructor.
     * @param $jewelryId
     * @param $metal
     * @param $carat
     * @param $weight
     * @param $size
     * @param $price
     * @param $jewTypeId
     * @param $imgPath
     * @param $jewDescription
     */
    public function __construct($jewelryId, $metal, $carat, $weight, $size, $price, $jewTypeId, $imgPath, $jewDescription)
    {
        $this->jewelryId = $jewelryId;
        $this->metal = $metal;
        $this->carat = $carat;
        $this->weight = $weight;
        $this->size = $size;
        $this->price = $price;
        $this->jewTypeId = $jewTypeId;
        $this->imgPath = $imgPath;
        $this->jewDescription = $jewDescription;
    }


    /**
     * @return mixed
     */
    public function getJewelryId()
    {
        return $this->jewelryId;
    }

    /**
     * @param mixed $jewelryId
     */
    public function setJewelryId($jewelryId): void
    {
        $this->jewelryId = $jewelryId;
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

    /**
     * @return mixed
     */
    public function getImgPath()
    {
        return $this->imgPath;
    }

    /**
     * @param mixed $imgPath
     */
    public function setImgPath($imgPath): void
    {
        $this->imgPath = $imgPath;
    }

    /**
     * @return mixed
     */
    public function getJewDescription()
    {
        return $this->jewDescription;
    }

    /**
     * @param mixed $jewDescription
     */
    public function setJewDescription($jewDescription): void
    {
        $this->jewDescription = $jewDescription;
    }

}