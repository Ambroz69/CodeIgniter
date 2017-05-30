<?php

class Charts extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->model('chart_model');
        // $this->load->library('form_validation');
        $this->load->helper('string');
    }

    public function index() {

        //$this->load->view('chart_view');

        $data['main_view'] = "home_view";
        $this->load->view('layouts/main', $data);
    }

    public function getdata1() {

        $data = $this->chart_model->get_data('SELECT last_name, count(last_name) AS pocet_jazd FROM drive JOIN taxi_driver
                                              ON taxi_driver_ID=taxi_driver.ID GROUP BY last_name');

        $responce->cols[] = array(
            "id" => "",
            "label" => "Name",
            "pattern" => "",
            "type" => "string"
        );

        $responce->cols[] = array(
            "id" => "",
            "label" => "Rides",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->last_name",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->pocet_jazd,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

    public function getdata2() {

        $data = $this->chart_model->get_data('SELECT licence_plate, ROUND(SUM(distance),1) AS najazdene_km 
                                              FROM drive JOIN car ON car_ID=car.ID GROUP BY licence_plate');

        $responce->cols[] = array(
            "id" => "",
            "label" => "Licence_plate",
            "pattern" => "",
            "type" => "string"
        );

        $responce->cols[] = array(
            "id" => "",
            "label" => "Distance",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $responce->rows[]["c"] = array(
                array(
                    "v" => "$cd->licence_plate",
                    "f" => null
                ) ,
                array(
                    "v" => (float)$cd->najazdene_km,
                    "f" => null
                )
            );
        }

        echo json_encode($responce);
    }

}

?>