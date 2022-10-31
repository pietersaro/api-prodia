<?php

defined('BASEPATH') OR exit('No direct script access allowed');
//$this->load->library('curl');

class M_weather extends CI_Model {

    public function list_weather() {
        $this->db->select('a.id , a.lat , a.lon, a.timezone , a.pressure, a.humidity , a.wind_speed');
        $this->db->from('weather a ');
        $query = $this->db->get();
        return $query->result();
    }

    public function insertWeather($data) {
        $data = array(
            'lat' => $data->lat,
            'lon' => $data->lon,
            'timezone' => "GMT+7",
            'temperature' => $data->temperature,
            'pressure' => $data->pressure,
            'humidity' => $data->humidity,
            'weather_date' => $data->date,
            'wind_speed' => $data->windspeed
        );
        $query = $this->db->insert('weather', $data);
        return $query;
    }

    

}
