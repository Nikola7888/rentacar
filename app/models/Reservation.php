<?php
class Reservation
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Preuzima sve rezervacije
    public function getAllReservations()
    {
        $this->db->query("SELECT * FROM reservations");
        $this->db->execute();
        return $this->db->results();
    }

    // Dodaje novu rezervaciju
    public function addReservation($user_id, $car_id, $start_date, $end_date, $status = 'pending')
    {
        $this->db->query("INSERT INTO reservations (user_id, car_id, start_date, end_date, status) 
                          VALUES (:user_id, :car_id, :start_date, :end_date, :status)");
        $this->db->bind(':user_id', $user_id);
        $this->db->bind(':car_id', $car_id);
        $this->db->bind(':start_date', $start_date);
        $this->db->bind(':end_date', $end_date);
        $this->db->bind(':status', $status);
        $this->db->execute();
    }

    // Ažurira rezervaciju
    public function updateReservation($id, $start_date, $end_date, $status)
    {
        $this->db->query("UPDATE reservations 
                          SET start_date=:start_date, end_date=:end_date, status=:status 
                          WHERE id=:id");
        $this->db->bind(':start_date', $start_date);
        $this->db->bind(':end_date', $end_date);
        $this->db->bind(':status', $status);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    // Preuzima rezervaciju po ID-u
    public function getReservationById($id)
    {
        $this->db->query("SELECT * FROM reservations WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->result();
    }

    // Briše rezervaciju
    public function deleteReservation($id)
    {
        $this->db->query("DELETE FROM reservations WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}
