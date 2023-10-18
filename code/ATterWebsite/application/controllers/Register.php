<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function register_user()
    {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'Full Name', 'required');
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('pass1', 'Password', 'required');
            $this->form_validation->set_rules('pass2', 'Password Confirmation', 'required|matches[pass1]');
    
            if ($this->form_validation->run() == FALSE) {
                redirect('login');
            } else {
                $name = $this->input->post('nama');
                $username = $this->input->post('username');
                $email = $this->input->post('email');
                $password = md5($this->input->post('pass1'));
    
                $data = array(
                    'name' => $name,
                    'username' => $username,
                    'email' => $email,
                    'password' => $password,
                    // Add other fields from your registration form here
                );
    
                $this->User_model->register_user($data);
    
                redirect('home'); // Redirect to the login page after successful registration
            }
        }
}

/* End of file Register.php and path \application\controllers\Register.php */
