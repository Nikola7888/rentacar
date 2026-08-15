<?php
class Car
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllCars()
    {
        $this->db->query("SELECT * FROM cars");
        $this->db->execute();
        return $this->db->results();
    }

    public function addCar($brand, $model, $year, $price_per_day, $available = true)
    {
        $this->db->query("INSERT INTO cars (brand, model, year, price_per_day, available) 
                          VALUES (:brand, :model, :year, :price, :available)");
        $this->db->bind(':brand', $brand);
        $this->db->bind(':model', $model);
        $this->db->bind(':year', $year);
        $this->db->bind(':price', $price_per_day);
        $this->db->bind(':available', $available);
        $this->db->execute();
    }

    public function updateCar($id, $brand, $model, $year, $price_per_day, $available)
    {
        $this->db->query("UPDATE cars 
                          SET brand=:brand, model=:model, year=:year, price_per_day=:price, available=:available 
                          WHERE id=:id");
        $this->db->bind(':brand', $brand);
        $this->db->bind(':model', $model);
        $this->db->bind(':year', $year);
        $this->db->bind(':price', $price_per_day);
        $this->db->bind(':available', $available);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    public function getCarById($id)
    {
        $this->db->query("SELECT * FROM cars WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->result();
    }

    public function deleteCar($id)
    {
        $this->db->query("DELETE FROM cars WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}