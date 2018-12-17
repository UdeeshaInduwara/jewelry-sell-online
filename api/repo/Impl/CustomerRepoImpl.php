<?php
require_once __DIR__."/../CustomerRepo.php";
require_once __DIR__."/../../core/Customer.php";

class CustomerRepoImpl implements CustomerRepo
{
    private $connection;
    public function __construct()
    {
        $this->connection = (new DBConnection())->getDBConnection();
    }

    public function setConnection(mysqli $connection): void
    {
//        $this->connection=$connection;
    }

    public function addCustomer(Customer $customer): bool
    {
        $res=$this->connection->query("INSERT INTO customer VALUES ('{$customer->getId()}','{$customer->getName()}','{$customer->getCountry()}','{$customer->getEmail()}','{$customer->getPassword()}')");
        return $res;
    }

    public function updateCustomer(Customer $customer): bool
    {
        $res=$this->connection->query("UPDATE customer SET custName='{$customer->getName()}',country='{$customer->setCountry()}',email='{$customer->getEmail()}',password='{$customer->getPassword()}' where custId='{$customer->getId()}'");
        return $res;
    }

    public function deleteCustomer(string $id): bool
    {
        $res=$this->connection->query("DELETE FROM customer WHERE custId='{$id}'");
        return $res;
    }

    public function searchCustomer(string $id): array
    {
        $res=$this->connection->query("SELECT * FROM customer WHERE custName='{$id}'");
        return $res->fetch_all();
    }

    public function getAllCustomers(): array
    {
        $rst=$this->connection->query("SELECT * FROM customer");
        return $rst->fetch_all();
    }
}