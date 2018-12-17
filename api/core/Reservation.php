<?php

class Reservation
{
    private $resId;
    private $resType;
    private $custId;
    private $jewIds=array();

    /**
     * Reservation constructor.
     * @param $resId
     * @param $resType
     * @param $custId
     * @param array $jewIds
     */
    public function __construct($resId, $resType, $custId, array $jewIds)
    {
        $this->resId = $resId;
        $this->resType = $resType;
        $this->custId = $custId;
        $this->jewIds = $jewIds;
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
    public function getResType()
    {
        return $this->resType;
    }

    /**
     * @param mixed $resType
     */
    public function setResType($resType): void
    {
        $this->resType = $resType;
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

    /**
     * @return array
     */
    public function getJewIds(): array
    {
        return $this->jewIds;
    }

    /**
     * @param array $jewIds
     */
    public function setJewIds(array $jewIds): void
    {
        $this->jewIds = $jewIds;
    }

}