<?php

class Taxi_drivers extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_permission','Can\'t access the page. Please log in first.');
            redirect('home/index');
        }
    }

    public function index_taxi_driver() {

        $data['taxi_drivers'] = $this->taxi_driver_model->get_taxi_drivers();
        $data['main_view'] = "taxi_drivers/index_taxi_driver";
        $this->load->view('layouts/main', $data);
    }

    public function display_taxi_driver($taxi_driver_ID) {

        $data['taxi_driver_data'] = $this->taxi_driver_model->get_taxi_driver($taxi_driver_ID);
        $data['main_view'] = "taxi_drivers/display_taxi_driver";
        $this->load->view('layouts/main', $data);
    }

    public function create_taxi_driver() {

        $this->form_validation->set_rules('first_name', '"First Name"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('last_name', '"Last Name"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('phone_number', '"Phone Number"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('address', '"Address"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('hired_date', '"Hired"', 'trim|required|exact_length[10]');
        $this->form_validation->set_rules('fired_date', '"Fired"', 'trim|exact_length[10]');
        $this->form_validation->set_rules('driving_licence_number', '"Driving Licence Number"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('driving_licence_expiration', '"Driving Licence Expiration"', 'trim|required|exact_length[10]');
        $this->form_validation->set_rules('rating', '"Rating"', 'trim|required|integer');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'taxi_drivers/create_taxi_driver';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'hired_date' => $this->input->post('hired_date'),
                'fired_date' => $this->input->post('fired_date'),
                'driving_licence_number' => $this->input->post('driving_licence_number'),
                'driving_licence_expiration' => $this->input->post('driving_licence_expiration'),
                'rating' => $this->input->post('rating')
            );

            if ($this->taxi_driver_model->create_taxi_driver($data)) {

                $this->session->set_flashdata('taxi_driver_created','New taxi driver added succesfully.');
                redirect('taxi_drivers/index_taxi_driver');
            }
        }
    }

    public function update_taxi_driver($taxi_driver_ID) {

        $this->form_validation->set_rules('first_name', '"First Name"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('last_name', '"Last Name"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('phone_number', '"Phone Number"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('address', '"Address"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('hired_date', '"Hired"', 'trim|required|exact_length[10]');
        $this->form_validation->set_rules('fired_date', '"Fired"', 'trim|exact_length[10]');
        $this->form_validation->set_rules('driving_licence_number', '"Driving Licence Number"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('driving_licence_expiration', '"Driving Licence Expiration"', 'trim|required|exact_length[10]');
        $this->form_validation->set_rules('rating', '"Rating"', 'trim|required|integer');

        if ($this->form_validation->run() == FALSE) {

            $data['taxi_driver_data'] = $this->taxi_driver_model->get_taxi_driver_info($taxi_driver_ID);
            $data['main_view'] = 'taxi_drivers/edit_taxi_driver';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'phone_number' => $this->input->post('phone_number'),
                'address' => $this->input->post('address'),
                'hired_date' => $this->input->post('hired_date'),
                'fired_date' => $this->input->post('fired_date'),
                'driving_licence_number' => $this->input->post('driving_licence_number'),
                'driving_licence_expiration' => $this->input->post('driving_licence_expiration'),
                'rating' => $this->input->post('rating')
            );

            if ($this->taxi_driver_model->update_taxi_driver($taxi_driver_ID, $data)) {

                $this->session->set_flashdata('taxi_driver_updated','Taxi driver updated succesfully.');
                redirect('taxi_drivers/index_taxi_driver');
            }
        }
    }

    public function delete_taxi_driver($taxi_driver_ID) {

        $this->taxi_driver_model->delete_taxi_driver($taxi_driver_ID);
        $this->session->set_flashdata('taxi_driver_deleted','Taxi driver deleted succesfully.');
        redirect('taxi_drivers/index_taxi_driver');
    }
}

?>