<?php

class UserModel {
    private $db;
    
    public function __construct()
    {
        $this->db = new Database; // Assuming you have a Database class that handles the PDO connection.
    }

    // Method to retrieve user data by username
    public function getUserByUsername($data) {
        try {
            // Prepare the SQL statement using the existing $this->db connection
            $stmt = $this->db->preparee("SELECT * FROM users WHERE email = :email AND password = :password");

            // Bind the username parameter
            $stmt->bindParam(':email', $data['email'], PDO::PARAM_STR);
            $stmt->bindParam(':password', $data['password'], PDO::PARAM_STR);

            // Execute the query
            $stmt->execute();

            // Fetch the user data
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            return $user; // Return the user data
        } catch (PDOException $e) {
            // Handle any database errors here
            echo "Database Error: " . $e->getMessage();
            return false;
        }
    }

    // Add other methods for user-related operations
}
