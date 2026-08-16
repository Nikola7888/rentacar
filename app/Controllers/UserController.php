<?php
class UserController extends Controller
{
    // Login
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $userModel = $this->loadModel("User");
            $user = $userModel->login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: ' . BASE_URL . 'user/profile/' . $user['id']);
                exit;
            } else {
                $this->renderView('User/Login', ["error" => "Invalid credentials"]);
            }
        }
        $this->renderView('User/Login');
    }

    // Registracija
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $userModel = $this->loadModel("User");
            $userModel->register($_POST['username'], $_POST['email'], $_POST['password'], 'customer');
            header('Location: ' . BASE_URL . 'user/login');
            exit;
        }
        $this->renderView('User/Register');
    }

    // Profil korisnika
    public function profile($id)
    {
        $userModel = $this->loadModel("User");
        $reservationModel = $this->loadModel("Reservation");

        $user = $userModel->getUserById($id);
        $reservations = $reservationModel->getReservationsByUserId($id);

        $this->renderView('User/Profile', ["user" => $user, "reservations" => $reservations], $user['username']);
    }
}
