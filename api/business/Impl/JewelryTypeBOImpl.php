<?php
require_once __DIR__."/../JewelryTypeBO.php";
require_once __DIR__."/../../core/JewelryType.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/Impl/JewelryTypeRepoImpl.php";
class JewelryTypeBOImpl implements JewelryTypeBO
{

    public function addJewelryType(JewelryType $jewelryType): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryTypeRepo=new JewelryTypeRepoImpl();
        $jewelryTypeRepo->setConnection($connection);
        return $jewelryTypeRepo->addJewelryType($jewelryType);
    }

    public function updateJewelryType(JewelryType $jewelryType): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryTypeRepo=new JewelryTypeRepoImpl();
        $jewelryTypeRepo->setConnection($connection);
        return $jewelryTypeRepo->updateJewelryType($jewelryType);
    }

    public function deleteJewelryType(string $id): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryTypeRepo=new JewelryTypeRepoImpl();
        $jewelryTypeRepo->setConnection($connection);
        return $jewelryTypeRepo->deleteJewelryType($id);
    }

    public function searchJewelryType(string $id): array
    {
        return array();
    }

    public function getAllJewelryTypes(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $jewelryTypeRepo=new JewelryTypeRepoImpl();
        $jewelryTypeRepo->setConnection($connection);
        return $jewelryTypeRepo->getAllJewelryTypes();
    }
}