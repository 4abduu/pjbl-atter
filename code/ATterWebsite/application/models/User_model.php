<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class User_model extends CI_Model 
{
    public function select()
    {

    }           
    public function get_user_by_email($email) {
        // Replace this with your actual database query to get a user by email
        return $this->db->get_where('users', array('email' => $email))->row();
    }
    public function register_user($data) {
        // Insert the user data into the 'users' table
        $this->db->insert('users', $data);
    }             
                        
}


/* End of file User_model.php and path \application\models\User_model.php */
