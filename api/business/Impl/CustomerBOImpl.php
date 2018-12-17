<?php
require_once __DIR__."/../CustomerBO.php";
require_once __DIR__."/../../core/Customer.php";
require_once __DIR__."/../../repo/Impl/CustomerRepoImpl.php";
require_once __DIR__."/../../db/DBConnection.php";

class CustomerBOImpl implements CustomerBO
{


    public function addCustomer(Customer $customer): bool
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->addCustomer($customer);
    }

    public function updateCustomer(Customer $customer): bool
    {
        return true;
    }

    public function deleteCustomer(string $id): bool
    {
        return true;
    }

    public function searchCustomer(string $id): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->searchCustomer($id);
    }

    public function getAllCustomers(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $customerRepo=new CustomerRepoImpl();
        $customerRepo->setConnection($connection);
        return $customerRepo->getAllCustomers();
    }

}