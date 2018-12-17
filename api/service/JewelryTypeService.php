<?php
require_once __DIR__."/../business/Impl/JewelryTypeBOImpl.php";
require_once __DIR__."/../core/JewelryType.php";

$jewelryTypeBo=new JewelryTypeBOImpl();

$mothod = $_POST["action"];
switch ($mothod) {
    case "getAll":
        echo json_encode($jewelryTypeBo->getAllJewelryTypes());
        break;
    case "add":
        $jewelryTypeID=$_POST["jewelryTypeID"];
        $jewelryTypeName=$_POST["jewelryTypeName"];
        $res=$jewelryTypeBo->addJewelryType(new JewelryType($jewelryTypeID,$jewelryTypeName));
        echo $res;
        break;
    case "delete":
        $jewTIdForDel=$_POST['jewTIdForDel'];
        echo $jewelryTypeBo->deleteJewelryType($jewTIdForDel);
        break;
    case "update":
        $jewTIdForUp=$_POST["jewTIdForUp"];
        $jewTNameForUp=$_POST["jewTNameForUp"];
        $res=$jewelryTypeBo->updateJewelryType(new JewelryType($jewTIdForUp,$jewTNameForUp));
        echo $res;
        break;
}