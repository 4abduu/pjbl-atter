<?php
class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {
        // controller
        $url = $this->getParseURL();
        $folder = "";
        if ($url == NULL) {
            $url = [$this->controller];
        }
        if (file_exists("../app/controllers/$url[0].php")) {
            $folder = "";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/kontakMember/$url[0].php")) {
            $folder = "kontakMember/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/billing/$url[0].php")) {
            $folder = "billing/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/layanan/$url[0].php")) {
            $folder = "layanan/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/laporan/$url[0].php")) {
            $folder = "laporan/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/network/$url[0].php")) {
            $folder = "network/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/halamanStatis/$url[0].php")) {
            $folder = "halamanStatis/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/pengaturan/$url[0].php")) {
            $folder = "pengaturan/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/paymentGateway/$url[0].php")) {
            $folder = "paymentGateway/";
            $this->controller = $url[0];
            unset($url[0]);
        } else if (file_exists("../app/controllers/community/$url[0].php")) {
            $folder = "community/";
            $this->controller = $url[0];
            unset($url[0]);
        } else {
            $this->controller = 'Notfound';
            unset($url[0]);
        }

        require_once "../app/controllers/{$folder}{$this->controller}.php";
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta mengirim params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function getParseURL() // mengubah url ke array
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode("/", $url);
            return $url;
        }
    }
}