<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('curl');

class C_home extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('M_auth');
    }

    public function dashboard() {
        $this->load->view('dashboard');
    }

    

}
