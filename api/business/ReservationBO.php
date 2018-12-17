<?php
require_once __DIR__."/../core/Reservation.php";

interface ReservationBO
{
    public function addReservation(Reservation $reservation): bool;
    public function updateReservation(Reservation $reservation): bool;
    public function deleteReservation(string $id): bool;
    public function searchReservation(string $id): array;
    public function getAllReservation(): array;
}