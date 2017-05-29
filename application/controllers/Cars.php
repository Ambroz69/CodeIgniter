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

    public function display_car($car_ID) {

        $data['car_data'] = $this->car_model->get_car($car_ID);
        $data['main_view'] = "cars/display_car";
        $this->load->view('layouts/main', $data);
    }

    public function create_car() {

        $this->form_validation->set_rules('licence_plate', '"Licence Plate"', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('mileage', '"Mileage"', 'trim|required|numeric');
        $this->form_validation->set_rules('vehicle_inspection_expiration', '"STK expiration date"', 'trim|required|exact_length[10]');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'cars/create_car';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'licence_plate' => $this->input->post('licence_plate'),
                'mileage' => $this->input->post('mileage'),
                'vehicle_inspection_expiration' => $this->input->post('vehicle_inspection_expiration')
            );

            if ($this->car_model->create_car($data)) {

                $this->session->set_flashdata('car_created','New car added succesfully.');
                redirect('cars/index');
            }
        }
    }

    public function update_car($car_ID) {

        $this->form_validation->set_rules('licence_plate', '"Licence Plate"', 'trim|required|exact_length[9]');
        $this->form_validation->set_rules('mileage', '"Mileage"', 'trim|required|numeric');
        $this->form_validation->set_rules('vehicle_inspection_expiration', '"STK expiration date"', 'trim|required|exact_length[10]');

        if ($this->form_validation->run() == FALSE) {

            $data['car_data'] = $this->car_model->get_car_info($car_ID);
            $data['main_view'] = 'cars/edit_car';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'licence_plate' => $this->input->post('licence_plate'),
                'mileage' => $this->input->post('mileage'),
                'vehicle_inspection_expiration' => $this->input->post('vehicle_inspection_expiration')
            );

            if ($this->car_model->update_car($car_ID, $data)) {

                $this->session->set_flashdata('car_updated','Car updated succesfully.');
                redirect('cars/index');
            }
        }
    }

    public function delete_car($car_ID) {

        $this->car_model->delete_car($car_ID);
        $this->session->set_flashdata('car_deleted','Car deleted succesfully.');
        redirect('cars/index');
    }
}

?>