<?php
class ReservationController extends Controller
{
    // Lista svih rezervacija
    public function index()
    {
        $reservationModel = $this->loadModel("Reservation");
        $reservations = $reservationModel->getAllReservations();
        $this->renderView('Reservation/Reservations', ["reservations" => $reservations], "All Reservations");
    }

    // Dodavanje rezervacije
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reservationModel = $this->loadModel("Reservation");
            $reservationModel->addReservation($_POST['user_id'], $_POST['car_id'], $_POST['start_date'], $_POST['end_date'], $_POST['status']);
            header('Location: ' . BASE_URL . 'reservations');
            exit;
        }
        $this->renderView('Reservation/AddReservation');
    }

    // Ažuriranje rezervacije
    public function update($id)
    {
        $reservationModel = $this->loadModel("Reservation");
        $reservation = $reservationModel->getReservationById($id);

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reservationModel->update($id, $_POST['user_id'], $_POST['car_id'], $_POST['start_date'], $_POST['end_date'], $_POST['status']);
            header('Location: ' . BASE_URL . 'reservations');
            exit;
        }
        $this->renderView('Reservation/UpdateReservation', ["reservation" => $reservation]);
    }

    // Brisanje rezervacije
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $reservationModel = $this->loadModel("Reservation");
            $reservationModel->delete($id);
        }
        header('Location: ' . BASE_URL . 'reservations');
        exit;
    }
}
