<?php
class Controller
{
    // Učitava model na osnovu prosleđenog naziva
    protected function loadModel($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    // Renderuje view na osnovu prosleđene putanje
    protected function renderView($viewPath, $data = [], $title = "Rent a Car")
    {
        // Pretvara niz $data u individualne promenljive
        extract($data);

        // Uključuje layout fajl koji renderuje view
        require_once '../app/views/layout.php';
    }
}