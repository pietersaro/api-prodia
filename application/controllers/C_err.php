<?php
//namespace controllers/api
defined('BASEPATH') OR exit('No direct script access allowed');

class C_err extends CI_Controller {
    
    function __construct() {

        parent::__construct();
  
    }

    
    public function err401(){
        return json_output(401,array('status' => 401,'message' => 'Unauthorized :('));
    }
        
}