<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cardio_public_c extends CI_Controller {
  function __Construct()
  {
    parent::__Construct();
    $this->load->model("Appoint_m");
  }


    public function index()
    {
        $this->load->view('template');
      
    }

    function login(){
        $this->load->view('login_page');
    }

    function cardio_first_page(){

    	$this->load->view('template2');
    }

    function backoffice_second_page(){

    	$this->load->view('template3');	
    }

    function test(){
        $this->load->view('login_v');
    }
  public function pre_appointment()
    {
        log_message("debug", "-----------------------Cardio_public_c line 21------------------------------");
  

       $this->form_validation->set_rules('name','Name','required');
       $this->form_validation->set_rules('email','Email','required|trim|valid_email');
       $this->form_validation->set_rules('Telefone','Telefone','required|numeric');
       $this->form_validation->set_rules('message','Message','required');
    
       if($this->form_validation->run())
       {
        log_message('debug','--------validation run success-------------');

          $name         = $this->input->post("name");
          $email        = $this->input->post("email");
          $telephone    = $this->input->post("Telefone");
          $message      = $this->input->post("message");

          $data = array('Name' => $name,
                        'Email'=> $email,
                        'Telefone' => $telephone,
                        'Message' => $message,
                        );
          

          $this->Appoint_m->pre_appointment($data);
          echo json_encode($this->load->view('form_success', "", True));
       }
       else
       {
         $data = array(
          'error_name'        => form_error ('name'),
          'error_email'       => form_error ('email'),
          'error_telephone'   => form_error ('telephone'),
          'error_message'     => form_error ('message'),
          'msg'               => "fail"
          );

       echo json_encode($data);  
       //   echo $this->load->view('form_failure', '', True);
       }
        
       
    }

}
