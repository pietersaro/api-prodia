<?php

//namespace controllers/api
defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {

    function __construct() {

        parent::__construct();
        $this->load->model('M_auth');
        $this->load->model('M_weather');
//        $this->load->library('curl');


        $response = $this->M_auth->auth();

        if (!$response) {
            redirect(base_url() . '/401');
        }
    }

    public function index() {
        return json_output(200, array('status' => 200, 'message' => 'success.'));
    }

    public function getWeather() {

        try {
            $weather = $this->M_weather->list_weather();
            return json_output(200, array('status' => 200, 'message' => 'list weather.', 'weather' => $weather));
        } catch (\Exception $ex) {
            return json_output(400, array('status' => 400, 'message' => 'Server Errror.'));
        }
    }

    

}
