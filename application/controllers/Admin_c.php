<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_c extends CI_Controller {

   function __construct()
     {
         parent::__construct();
        $this->load->model('Admin_m');
     }

    public function index()
    {
        $this->load->view('template');
      
    }

    public function login()
    {
     
     //get the posted values
     $username= $this->input->post('txt_username');
     $password= $this->input->post('txt_password');

     //set validations
     $this->form_validation->set_rules('txt_username','Username','trim|required');
     $this->form_validation->set_rules('txt_password','password','trim|required');


     if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login_v');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "login")
               {
                    //check if username and password is correct
                    $usr_result = $this->Admin_m->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect("index");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Invalid username and password!</div>');
                         redirect('login/index');
                    }
               }
               else
               {
                    redirect('login/index');
               }
          }
    }
}?>
