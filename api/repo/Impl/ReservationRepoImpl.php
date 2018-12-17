<?php
require_once __DIR__ . "/../ReservaionRepo.php";
require_once __DIR__ . "/../../core/Reservation.php";

class ReservationRepoImpl implements ReservaionRepo
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

    public function addReservation(Reservation $reservation): bool
    {
        $res=$this->connection->query("INSERT INTO reservation VALUES('{$reservation->getResId()}','{$reservation->getCustId()}','{$reservation->getResType()}',current_date )");
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
        $res=$this->connection->query("SELECT * FROM reservation ORDER BY resId DESC LIMIT 1");
        return $res->fetch_all();
    }
}