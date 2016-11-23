<?php

class Appoint_m extends CI_Model
{
 function __construct()
  {
  	parent::__construct();
  }
  
  public function pre_appointment($data)
  {

  	$this->db->insert('sapo_espaco',$data);

  }    
  
}
 
