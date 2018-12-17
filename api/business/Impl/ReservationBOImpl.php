<?php
require_once __DIR__."/../ReservationBO.php";
require_once __DIR__."/../../core/Reservation.php";
require_once __DIR__."/../../db/DBConnection.php";
require_once __DIR__."/../../repo/Impl/ReservationRepoImpl.php";
require_once __DIR__."/../../repo/Impl/JewelryRepoImpl.php";
require_once __DIR__."/../../repo/Impl/JewelryPurchaseDetailRepoImpl.php";

class ReservationBOImpl implements ReservationBO
{

    public function addReservation(Reservation $reservation): bool
    {
        $res=true;
        $connection=(new DBConnection())->getDBConnection();
        $connection->autocommit(false);

        $reservationRepo=new ReservationRepoImpl();
        $reservationRepo->setConnection($connection);
        $res=$reservationRepo->addReservation($reservation);
        if ($res==false){
            $connection->rollback();
            return false;
        }

        $jewelryRepo=new JewelryRepoImpl();
        $jewelryRepo->setConnection($connection);

        $jewPDetailRepo=new JewelryPurchaseDetailRepoImpl();
        $jewPDetailRepo->setConnection($connection);

        foreach ($reservation->getJewIds() as $ids){
            $jewelry=$jewelryRepo->searchJewelry($ids);
            $jewPDetail=new JewelryPurchaseDetail($reservation->getResId(),$jewelry[0][0],$jewelry[0][1],$jewelry[0][2],$jewelry[0][3],$jewelry[0][4],$jewelry[0][5],$jewelry[0][6]);
            $res=$jewPDetailRepo->addJewelryPurchaseDetail($jewPDetail);
            if ($res==false){
                $connection->rollback();
                return false;
            }
            $res=$jewelryRepo->deleteJewelry($ids);
            if ($res==false){
                $connection->rollback();
                return false;
            }
        }
        $connection->commit();
        $connection->autocommit(true);
        return $res;
    }

    public function updateReservation(Reservation $reservation): bool
    {
        return false;
    }

    public function deleteReservation(string $id): bool
    {
        return false;
    }

    public function searchReservation(string $id): array
    {
        return array();
    }

    public function getAllReservation(): array
    {
        $connection=(new DBConnection())->getDBConnection();
        $reservationRepo=new ReservationRepoImpl();
        $reservationRepo->setConnection($connection);
        return $reservationRepo->getAllReservation();

    }
}