<?php

//namespace controllers/api
defined('BASEPATH') OR exit('No direct script access allowed');

class C_weather extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('M_weather');
    }

    public function syncWeather() {
    	$lat = '-6.28';
    	$lon = '106.50';
        $siteaddressAPI = "https://api.open-meteo.com/v1/forecast?latitude={$lat}&longitude={$lon}&hourly=temperature_2m,relativehumidity_2m,surface_pressure,windspeed_10m&timezone=Asia%2FBangkok";

        $data = file_get_contents($siteaddressAPI);
        $weather = json_decode($data);
            // return json_output(200, $weather->hourly);
        
        foreach ($weather->hourly->time as $key => $row) {
        	$subData = $weather->hourly;
    		$params = new stdClass();
            $params->lat = $lat;
            $params->lon = $lon;
            $params->date = $row;
            $params->temperature = $subData->temperature_2m[$key];
            $params->humidity = $subData->relativehumidity_2m[$key];
            $params->pressure = $subData->surface_pressure[$key];
            $params->windspeed = $subData->windspeed_10m[$key];

            $result = $this->M_weather->insertWeather($params);
        }

        return json_output(200, array('status' => 200, 'message' => 'Success input data.'));
    }
}