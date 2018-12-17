<?php
require_once __DIR__."/../core/Customer.php";

interface CustomerBO
{
    public function addCustomer(Customer $customer): bool;
    public function updateCustomer(Customer $customer): bool;
    public function deleteCustomer(string $id): bool;
    public function searchCustomer(string $id): array;
    public function getAllCustomers(): array;
}