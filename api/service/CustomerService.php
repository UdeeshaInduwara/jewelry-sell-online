<?php
require_once __DIR__ . "/../business/Impl/CustomerBOImpl.php";
require_once __DIR__ . "/../core/Customer.php";

$customerBO = new CustomerBOImpl();

$mothod = $_POST["action"];
switch ($mothod) {
    case "getAll":
        echo json_encode($customerBO->getAllCustomers());
        break;
    case "add":
        $customerID = $_POST["customerID"];
        $customerName = $_POST["customerName"];
        $customerCountry = $_POST["customerCountry"];
        $customerEmail = $_POST["customerEmail"];
        $customerPassword = $_POST["customerPassword"];
        $res = $customerBO->addCustomer(new Customer($customerID, $customerName, $customerCountry, $customerEmail, $customerPassword));
        echo $res;
        break;
    case "search":
        $userName = $_POST["loginUsername"];
        $pw = $_POST["loginPassword"];
        $res = $customerBO->searchCustomer($userName);
        if ($res[0][4] == $pw) {
            $res[0][5]=true;
            echo json_encode($res);
        } else {
            $res[0][5]=false;
            echo json_encode($res);
        }
        break;
}