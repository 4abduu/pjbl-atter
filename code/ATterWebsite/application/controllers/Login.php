<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $data['error'] = $this->session->flashdata('error');
        $this->load->view('login', $data);
    }

    public function login_user() {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password')); // Use md5 for the password

        $user = $this->User_model->get_user_by_email($email);

        if ($user && $user->password === $password) {
            $this->session->set_userdata('user_email', $email);
            redirect('home'); // Change 'dashboard' to your desired landing page
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
