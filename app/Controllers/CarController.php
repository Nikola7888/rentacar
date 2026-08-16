<?php
class CarController extends Controller
{
    // Lista svih automobila
    public function index()
    {
        $carModel = $this->loadModel("Car");
        $cars = $carModel->getAllCars();
        $this->renderView('Car/Cars', ["cars" => $cars], "All Cars");
    }

    // Dodavanje novog automobila
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $carModel = $this->loadModel("Car");
            $carModel->addCar($_POST['brand'], $_POST['model'], $_POST['year'], $_POST['price_per_day']);
            header('Location: ' . BASE_URL . 'cars');
            exit;
        }
        $this->renderView('Car/AddCar');
    }

    // Ažuriranje automobila
    public function update($id)
    {
        $carModel = $this->loadModel("Car");
        $car = $carModel->getCarById($id);

        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $carModel->update($id, $_POST['brand'], $_POST['model'], $_POST['year'], $_POST['price_per_day']);
            header('Location: ' . BASE_URL . 'cars');
            exit;
        }
        $this->renderView('Car/UpdateCar', ["car" => $car]);
    }

    // Brisanje automobila
    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $carModel = $this->loadModel("Car");
            $carModel->delete($id);
        }
        header('Location: ' . BASE_URL . 'cars');
        exit;
    }
}
