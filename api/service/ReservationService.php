<?php
require_once __DIR__."/../business/Impl/ReservationBOImpl.php";
require_once __DIR__."/../business/Impl/FavouriteJewelryBOImpl.php";
require_once __DIR__."/../core/Reservation.php";

$reservationBo=new ReservationBOImpl();
$favJewBo=new FavouriteJewelryBOImpl();

$mothod = $_POST["action"];
switch ($mothod) {
    case "getAll":
        echo json_encode($reservationBo->getAllReservation());
        break;
    case "add":
        $resId=$_POST['resId'];
        $resType=$_POST['resType'];
        $custId=$_POST['custId'];
        $jewIds=json_decode($_POST['jewIds']);
        $res=$reservationBo->addReservation(new Reservation($resId,$resType,$custId,$jewIds));
        echo $res;
        break;
    case "delete":
        $remjewId=$_POST['remjewId'];
        $remcustId=$_POST['remcustId'];
        $res=$favJewBo->deleteFavouriteJewelry($remjewId,$remcustId);
        echo $res;
        break;
}