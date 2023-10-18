<?php 

class Home extends Controller {
    public $model_name = "Home";
    public function index()
    {
        // $data['judul'] = 'UNIMASOFT';
        // $data['about'] = $this->model("$this->model_name", 'Home_models')->getAllAbout();
        // $data['contact'] = $this->model("$this->model_name", 'Home_models')->getAllContact();
        // $data['footer'] = $this->model("$this->model_name", 'Home_models')->getAllFooter();
        // $data['Home'] = $this->model("$this->model_name", 'Home_models')->getAllHome();
        // $data['Open'] = $this->model("$this->model_name", 'Home_models')->getAllOpen();
        // $data['Service'] = $this->model("$this->model_name", 'Home_models')->getAllService();
        // $data['Social'] = $this->model("$this->model_name", 'Home_models')->getAllSocial();
        // $data['Telephone'] = $this->model("$this->model_name", 'Home_models')->getAllTelephone();
        // $data['Services'] = $this->model("$this->model_name", 'Home_models')->getAllServices();
        // $data['Portfolio'] = $this->model("$this->model_name", 'Home_models')->getAllPortfolio();
        // $data['Game'] = $this->model("$this->model_name", 'Home_models')->getAllGame();
        // $data['Animasi'] = $this->model("$this->model_name", 'Home_models')->getAllAnimasi();
        $this->view('user/body');
    }
}