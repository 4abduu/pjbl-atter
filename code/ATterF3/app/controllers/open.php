<?php 

class open extends Controller {
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
            $this->view('admin/open', $data);
            $this->view('templates/admin/footer', $data);
        }
    }

    public function tambahOpen()
    {
        if ($this->model("$this->model_name", 'Home_models')->tambahDataOpen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/open');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/open');
            exit;
        }
    }
    public function hapusOpen($id)
    {
        if ($this->model("$this->model_name", 'Home_models')->hapusDataOpen($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/open');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/open');
            exit;
        }
    }

    public function getUbahOpen()
    {
        echo json_encode($this->model("$this->model_name", 'Home_models')->getOpenById($_POST['id']));
    }

    public function ubahOpen()
    {
        if ($this->model("$this->model_name", 'Home_models')->ubahDataOpen($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/open');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/open');
            exit;
        }
    }
}