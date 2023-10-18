<?php
// AuthController.php
class AuthController extends Controller {
    public $model_name = "User";
    public function index() {
        // Periksa apakah sesi sudah dimulai
        if (!session_id()) {
            session_start();
        }

        // Handle logika login di sini
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Lakukan verifikasi autentikasi dengan model
            
            require_once 'C:\laragon\www\UNIMASOFT\app\models\user\UserModel.php';
            $userModel = new UserModel(); // Gantilah dengan cara yang sesuai untuk menginisiasi model Anda
            $user = $userModel->getUserByUsername($username);

            if ($user && $password === $user['password']) {
                // Autentikasi berhasil
                $_SESSION['user_id'] = $user['id'];
                header('Location: ' . BASEURL . '/dashboard'); // Redirect ke halaman setelah login
                exit();
            } else {
                // Autentikasi gagal
                $error = "<script>window.alert(Login gagal. Periksa kembali username dan password Anda.)</script>";
                // Tampilkan pesan kesalahan
            }
        }

        $data['judul'] = 'UNIMASOFT - Log In';
        $this->view('admin/login', $data);
    }

    public function logout() {
        // Periksa apakah sesi sudah dimulai
        if (!session_id()) {
            session_start();
        }

        // Handle logika logout di sini
        session_destroy();
        header('Location: ' . BASEURL); // Redirect ke halaman login setelah logout
        exit();
    }
}
?>
