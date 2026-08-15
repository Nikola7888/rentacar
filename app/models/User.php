<?php
class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    // Preuzima sve korisnike
    public function getAllUsers()
    {
        $this->db->query("SELECT * FROM users");
        $this->db->execute();
        return $this->db->results();
    }

    // Dodaje novog korisnika
    public function addUser($username, $password, $role, $email)
    {
        $this->db->query("INSERT INTO users (username, password, role, email) 
                          VALUES (:username, :password, :role, :email)");
        $this->db->bind(':username', $username);
        $this->db->bind(':password', password_hash($password, PASSWORD_DEFAULT)); // sigurno čuvanje
        $this->db->bind(':role', $role);
        $this->db->bind(':email', $email);
        $this->db->execute();
    }

    // Ažurira korisnika
    public function updateUser($id, $username, $role, $email)
    {
        $this->db->query("UPDATE users SET username=:username, role=:role, email=:email WHERE id=:id");
        $this->db->bind(':username', $username);
        $this->db->bind(':role', $role);
        $this->db->bind(':email', $email);
        $this->db->bind(':id', $id);
        $this->db->execute();
    }

    // Preuzima korisnika po ID-u
    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM users WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->result();
    }

    // Briše korisnika
    public function deleteUser($id)
    {
        $this->db->query("DELETE FROM users WHERE id=:id");
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
}
