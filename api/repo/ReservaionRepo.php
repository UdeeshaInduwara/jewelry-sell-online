<?php
require_once __DIR__."/../core/Reservation.php";

interface ReservaionRepo
{
    public function setConnection(mysqli $connection): void;
    public function addReservation(Reservation $reservation): bool;
    public function updateReservation(Reservation $reservation): bool;
    public function deleteReservation(string $id): bool;
    public function searchReservation(string $id): array;
    public function getAllReservation(): array;
}