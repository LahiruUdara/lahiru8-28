<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//we need to call PHP's session object to access it through CI
class Home extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
   $this->load->library('session');
   $this->load->helper('url');
 }
 
 function index()
 {
   //checking the session
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     
     //assigning 'email' to '$data' array
     $data['name'] = $session_data['name'];
     
    //passing 'email' as $data 
     $this->load->view('Home', $data);
   }
   else
   {
    //   echo 'jfsoi';
     //If no session, redirect to login page
     redirect('login', 'refresh');
   }
 }
 
 function logout()
 {
   //unset all session data
   $this->session->unset_userdata('logged_in');
   
   //session_destroy();
   $this->session->sess_destroy();
  
   //redirect('home','');
   redirect('login', 'refresh');
 }
 
}
 
?>

