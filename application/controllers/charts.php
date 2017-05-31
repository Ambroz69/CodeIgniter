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

        $response->cols[] = array(
            "id" => "",
            "label" => "Name",
            "pattern" => "",
            "type" => "string"
        );

        $response->cols[] = array(
            "id" => "",
            "label" => "Rides",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $response->rows[]["c"] = array(
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

        echo json_encode($response);
    }

    public function getdata2() {

        $data = $this->chart_model->get_data('SELECT licence_plate, ROUND(SUM(distance),1) AS najazdene_km 
                                              FROM drive JOIN car ON car_ID=car.ID GROUP BY licence_plate');

        $response->cols[] = array(
            "id" => "",
            "label" => "Licence_plate",
            "pattern" => "",
            "type" => "string"
        );

        $response->cols[] = array(
            "id" => "",
            "label" => "Distance",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $response->rows[]["c"] = array(
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

        echo json_encode($response);
    }

    public function getdata3() {

        $data = $this->chart_model->get_data('SELECT type,ROUND(SUM(amount_earned),1) AS zarobok FROM drive
                                              JOIN shift ON drive.shift_ID=shift.ID JOIN shift_details ON
                                              shift.shift_details_ID=shift_details.ID GROUP BY type');

        $response->cols[] = array(
            "id" => "",
            "label" => "Shift type",
            "pattern" => "",
            "type" => "string"
        );

        $response->cols[] = array(
            "id" => "",
            "label" => "Profit",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->type",
                    "f" => null
                ) ,
                array(
                    "v" => (float)$cd->zarobok,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }

    public function getdata4() {

        $data = $this->chart_model->get_data('SELECT last_name,rating FROM taxi_driver');

        $response->cols[] = array(
            "id" => "",
            "label" => "Name",
            "pattern" => "",
            "type" => "string"
        );

        $response->cols[] = array(
            "id" => "",
            "label" => "Rating",
            "pattern" => "",
            "type" => "number"
        );

        foreach($data as $cd) {
            $response->rows[]["c"] = array(
                array(
                    "v" => "$cd->last_name",
                    "f" => null
                ) ,
                array(
                    "v" => (int)$cd->rating,
                    "f" => null
                )
            );
        }

        echo json_encode($response);
    }

}

?>