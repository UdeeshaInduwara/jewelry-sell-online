<?php
require_once __DIR__."/../business/Impl/JewelryBOImpl.php";
require_once __DIR__."/../core/Jewelry.php";

$jewelryBo=new JewelryBOImpl();

$mothod = $_POST["action"];
switch ($mothod) {
    case "getAll":
        echo json_encode($jewelryBo->getAllJewelry());
        break;
    case "add":
        $jewelryID=$_POST['jewelryID'];
        $jewelryMetal=$_POST['jewelryMetal'];
        $jewelryCarat=$_POST['jewelryCarat'];
        $jewelryWeight=$_POST['jewelryWeight'];
        $jewelrySize=$_POST['jewelrySize'];
        $jewelryPrice=$_POST['jewelryPrice'];
        $jewelryTypeId=$_POST['jewelryTypeId'];
        $jewelryDescription=$_POST['jewelryDescription'];
        $img= $_FILES['jewelryImg']['name'];
        $tempory=$_FILES['jewelryImg']['tmp_name'];
        $res=$jewelryBo->addJewelry(new Jewelry($jewelryID,$jewelryMetal,$jewelryCarat,$jewelryWeight,$jewelrySize,$jewelryPrice,$jewelryTypeId,$img,$jewelryDescription));
        move_uploaded_file($tempory,"../../dist/images/$img");
        echo $res;
        break;
    case "delete":
        $jewIdForDel=$_POST['jewIdForDel'];
        $res=$jewelryBo->deleteJewelry($jewIdForDel);
        echo $res;
        break;
    case "update":
        $jewIdForDel=$_POST['jewIdForDel'];
        $jmetal=$_POST['jmetal'];
        $jcaret=$_POST['jcaret'];
        $jweight=$_POST['jweight'];
        $jsize=$_POST['jsize'];
        $jprice=$_POST['jprice'];
        $jjtid=$_POST['jjtid'];
        $jimgpath=$_POST['jimgpath'];
        $jdescription=$_POST['jdescription'];
        $res=$jewelryBo->updateJewelry(new Jewelry($jewIdForDel,$jmetal,$jcaret,$jweight,$jsize,$jprice,$jjtid,$jimgpath,$jdescription));
        echo $res;
        break;
}