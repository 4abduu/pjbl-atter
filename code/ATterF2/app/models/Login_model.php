<?php

class Login_model {
      private $db;
      public function __construct()
        {
            $this->db = new Database;
        }
//       public function loginAdmin($data)
//     {
//       $encryptedPassword = md5($data['password']);

//         $this->db->query(
//             "SELECT * FROM {$this->table} 
//                 WHERE 
//             `email` = :email AND
//             `password` = :password AND 
//             `level` = admin
//         "
//         );

//         $this->db->bind("email", $data['email']);
//         $this->db->bind("password", $encryptedPassword);
//         $this->db->bind("level", "admin");

//         return $this->db->fetch();
//     }

//     public function loginUser($data)
// {
//     // Mengenkripsi kata sandi menggunakan MD5
//     $encryptedPassword = md5($data['password']);

//     $this->db->query(
//         "SELECT * FROM {$this->table}
//             WHERE 
//         `email` = :email AND
//         `password` = :password AND
//         `level` = user 
//     "
//     );

//     $this->db->bind("email", $data['email']);
//     $this->db->bind("password", $encryptedPassword); 
//     $this->db->bind("level", "user"); 
//     return $this->db->fetch();
// }

 
//     public function logout () {
//       $_SESSION = array();
//       session_destroy();
//       header('location: ' . BASEURL);
//   }
public function getUser($data) {
    try {
        $encryptedPassword = md5($data['password']); // Meng-hash password

        $this->db->query("SELECT * FROM users WHERE email = :email AND password = :password");
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $encryptedPassword); // Menggunakan password yang di-hash
        $this->db->execute();
        return $this->db->single(); // Menggunakan single() untuk mendapatkan satu baris hasil

    } catch (PDOException $e) {
        // Handle any database errors here
        echo "Database Error: " . $e->getMessage();
        return false;
    }
}
}