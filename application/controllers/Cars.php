<?php

class Cars extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_permission','Can\'t access the page. Please log in first.');
            redirect('home/index');

        }

    }

    public function index() {

        $data['cars'] = $this->car_model->get_cars();

        $data['main_view'] = "cars/index";
        $this->load->view('layouts/main', $data);

    }

    public function display() {

        $data['main_view'] = "cars/display";
        $this->load->view('layouts/main', $data);

    }
}

?>