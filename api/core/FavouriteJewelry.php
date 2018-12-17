<?php

class FavouriteJewelry
{
    private $jewId;
    private $custId;
    private $status;

    /**
     * FavouriteJewelry constructor.
     * @param $jewId
     * @param $custId
     * @param $status
     */
    public function __construct($jewId, $custId, $status)
    {
        $this->jewId = $jewId;
        $this->custId = $custId;
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
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
    public function getCustId()
    {
        return $this->custId;
    }

    /**
     * @param mixed $custId
     */
    public function setCustId($custId): void
    {
        $this->custId = $custId;
    }

}