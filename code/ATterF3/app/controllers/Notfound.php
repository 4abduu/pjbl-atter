<?php 

class notfound extends Controller {
    public $model_name = "Home";
    public function index()
    {
        $data['judul'] = 'UNIMASOFT';
        $this->view('notfound', $data);
    }
}