<?php 

class homeAdmin extends Controller {
    public $model_name = "Home";
    public function index()
    {
        $data['judul'] = 'UNIMASOFT - Admin';
        $data['about'] = $this->model("$this->model_name", 'Home_models')->getAllAbout();
        $data['contact'] = $this->model("$this->model_name", 'Home_models')->getAllContact();
        $data['footer'] = $this->model("$this->model_name", 'Home_models')->getAllFooter();
        $data['Home'] = $this->model("$this->model_name", 'Home_models')->getAllHome();
        $data['Open'] = $this->model("$this->model_name", 'Home_models')->getAllOpen();
        $data['Service'] = $this->model("$this->model_name", 'Home_models')->getAllService();
        $data['Social'] = $this->model("$this->model_name", 'Home_models')->getAllSocial();
        $data['Telephone'] = $this->model("$this->model_name", 'Home_models')->getAllTelephone();
        $data['Services'] = $this->model("$this->model_name", 'Home_models')->getAllServices();
        $data['Portfolio'] = $this->model("$this->model_name", 'Home_models')->getAllPortfolio();
        $data['user'] = $this->model("$this->model_name", 'Home_models')->getAllUser();
        if (!isset($_SESSION['user_id'])) {
            // Pengguna belum masuk, alihkan ke halaman login
            header('Location: ' . BASEURL . '/forbidden');
            exit();
        } else {
            $this->view('templates/admin/header', $data);
            $this->view('admin/home', $data);
            $this->view('templates/admin/footer', $data);
        }
    }

    public function getubah() {
        echo json_encode($this->model("$this->model_name", 'Home_models')->getHomeById($_POST['id']));
    }

    public function ubah()  {
        if ($this->model("$this->model_name", 'Home_models')->ubahDataHome($_POST) > 0) {
            Flasher::setFlash('BERHASIL', 'Diubah', 'success');
            header('Location: ' . BASEURL . '/homeAdmin');
            exit;
        } else {
            Flasher::setFlash('GAGAL', 'Diubah', 'danger');
            header('Location: ' . BASEURL . '/homeAdmin');
            exit;
        }
    }
}