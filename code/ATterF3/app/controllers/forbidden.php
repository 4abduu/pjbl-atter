<?php 

class forbidden extends Controller {
    public $model_name = "Home";
    public function index()
    {
        $data['judul'] = 'UNIMASOFT';
        $this->view('forbidden', $data);
    }
}