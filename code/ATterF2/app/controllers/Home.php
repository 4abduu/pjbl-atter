<?php 

class Home extends Controller{
    
        //     public function index()
        //     {
        //         $data = [];

        //         $user = $this->user->getUserData(); 
        //         $data['user'] = $this->user;
        //         $data['judul'] = 'Home';
        //         if ($data['user']['level'] == 'admin') { 
        //             $this->view('admin/header', $data);
        //             $this->view('admin/body');
        //             $this->view('admin/footer');
        //         } else if ($data['user']['level'] == 'user') {
        //             $this->view('user/header', $data);
        //             $this->view('user/body');
        //             $this->view('user/footer');
        //         } else if ($data['user']['level'] == '') {
        //             $this->view('guest/header', $data);
        //             $this->view('guest/body');
        //             $this->view('guest/footer');
        //         } else {
        //             header("Location: " . BASEURL);
        //             Flasher::setFlash('GAGAL', 'Anda Tidak Mempunyai Akses Untuk Menuju Halaman Tersebut', 'danger');
        //         }
        //     }
        // }
        public function index() {
            if (!session_id()) {
                session_start();
            }
        
            $data = [];
        
            if (isset($_SESSION['user'])) {
                $user = $_SESSION['user']; // Ambil data pengguna dari sesi
        
                if ($user['level'] == 'admin') {
                    $this->redirectToAdminDashboard();
                } elseif ($user['level'] == 'user') {
                    $this->redirectToUserDashboard();
                } elseif ($user['level'] == '') {
                    $this->redirectToGuestDashboard();
                } else {
                    $this->redirectToDefault();
                }
            } else {
                // Pengguna belum masuk, mungkin perlu mengarahkan mereka ke halaman login
                header("Location: " . BASEURL . "login");
            }
        }
        
        private function redirectToAdminDashboard() {
                    $data['judul'] = 'Home Admin';
                    $this->view('admin/header', $data);
                    $this->view('admin/body');
                    $this->view('admin/footer');
        }
        
        private function redirectToUserDashboard() {
            $data['judul'] = 'Home User';
            $this->view('user/header', $data);
            $this->view('user/body');
            $this->view('user/footer');
        }
        
        private function redirectToGuestDashboard() {
            $data['judul'] = 'Home Guest';
                    $this->view('guest/header', $data);
                    $this->view('guest/body');
                    $this->view('guest/footer');
        }
        
        private function redirectToDefault() {
            header("Location: " . BASEURL);
            Flasher::setFlash('GAGAL', 'Anda Tidak Mempunyai Akses Untuk Menuju Halaman Tersebut', 'danger');
        }
        
            
        //     $this->view('login/header');
        //     $this->view('login/body');
        //     $this->view('login/footer');
    

    public function user(){

    }

}