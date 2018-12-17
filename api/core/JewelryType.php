<?php
class JewelryType
{
    private $jewTId;
    private $name;

    /**
     * JewelryType constructor.
     * @param $jewTId
     * @param $name
     */
    public function __construct($jewTId, $name)
    {
        $this->jewTId = $jewTId;
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getJewTId()
    {
        return $this->jewTId;
    }

    /**
     * @param mixed $jewTId
     */
    public function setJewTId($jewTId): void
    {
        $this->jewTId = $jewTId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

}