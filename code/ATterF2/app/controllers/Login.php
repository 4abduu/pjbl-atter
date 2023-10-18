<?php

class Login extends Controller {

    public function index() {
        // Periksa apakah sesi sudah dimulai
        if (!session_id()) {
            session_start();
        }

        // Handle logika login di sini
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Lakukan verifikasi autentikasi dengan model
            require_once '../app/models/Login_model.php'; // Sesuaikan path dengan struktur folder Anda
            $userModel = $this->model('Login_model');
            $user = $userModel->getUser(['email' => $email, 'password' => $password]);

            if ($user) {
                // Autentikasi berhasil
                $_SESSION['user_id'] = $user['id'];
                header('Location: ' . BASEURL); // Redirect ke halaman setelah login
                exit();
            } else {
                // Autentikasi gagal
                $error = "Login gagal. Periksa kembali username dan password Anda.";
                // Tampilkan pesan kesalahan
            }
        }

        $data['judul'] = 'ATter - Log In';
        $this->view('login/header', $data);
        $this->view('login/body');
        $this->view('login/footer');
    }

    public function logout() {
        // Periksa apakah sesi sudah dimulai
        if (!session_id()) {
            session_start();
        }
    
        // Handle logika logout di sini
        session_destroy();
        // Hapus sesi pengguna
        unset($_SESSION['user']);
        header('Location: ' . BASEURL . 'login'); // Redirect ke halaman login setelah logout
        exit();
    }
    

//     public function logProccess()
// {
//     if (isset($_POST['email']) && isset($_POST['password'])) {
//         $data['email'] = $_POST['email'];
//         $data['password'] = $_POST['password'];
//         $admin = $this->model("Login_model")->loginAdmin($data);
//         $siswa = $this->model("Login_model")->loginSiswa($data);
//         $guest = null;
//         if ($admin) {
//             Flasher::setFlash('BERHASIL', 'Login', 'success');
//             header("Location: " . BASEURL);
//             exit; // Stop script execution after redirection
//         } elseif ($siswa) {
//             Flasher::setFlash('BERHASIL', 'Login', 'success');
//             header("Location: " . BASEURL);
//             exit; // Stop script execution after redirection
//         } elseif ($guest) {
//             Flasher::setFlash('BERHASIL', 'Login', 'success');
//             header("Location: " . BASEURL);
//             exit; // Stop script execution after redirection
//         } else {
//             Flasher::setFlash('GAGAL', 'Login', 'danger');
//             header("Location: " . BASEURL . "login");
//             exit; // Stop script execution after redirection
//         }
//     }
// }

}
