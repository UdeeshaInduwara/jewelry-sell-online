<?php
require_once __DIR__."/../business/Impl/FavouriteJewelryBOImpl.php";
require_once __DIR__."/../core/FavouriteJewelry.php";

$mothod = $_POST["action"];

$fJewBo=new FavouriteJewelryBOImpl();
switch ($mothod) {
    case "search":
        $loadCustId=$_POST['loadCustId'];
        echo json_encode($fJewBo->searchFavouriteJewelry($loadCustId));
        break;
    case "add":
        $jewId=$_POST['jewId'];
        $custId=$_POST['custId'];
        $res=$fJewBo->addFavouriteJewelry(new FavouriteJewelry($jewId,$custId,'selected'));
        echo $res;
        break;
}