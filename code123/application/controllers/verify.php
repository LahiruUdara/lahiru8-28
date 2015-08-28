<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class verify extends CI_Controller {

    function __construct() {
        parent::__construct();
        //loading model
        $this->load->model('database');
        if($this->input->post('submit'))
          $this->load->view('demo');
    }

    function index() {
              
        //This method will have the credentials validation
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            $this->load->view('login');
        } else {
            //Go to private area    
            //redirect('home');
            $this->check_database();
        }
    }

    function check_database() {

        //Field validation succeeded.  Validate against database
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //query the database
        $result = $this->user->login($email, $password);

        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(                   
                    'name' => $row["name"]
                );

                // * set the session using 'set_userdata()' function
                // * session name is 'logged_in'
                $this->session->set_userdata('logged_in', $sess_array);
            }
            redirect('Home');
        } else {
            echo "<script type= 'text/javascript'>alert('Invalid email or password');</script>";
            $this->load->view('login');

            
          }
    }

}

?>
