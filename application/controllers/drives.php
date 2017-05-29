<?php

class Drives extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_permission','Can\'t access the page. Please log in first.');
            redirect('home/index');
        }
    }

    public function index_drive() {

        $data['drives'] = $this->drive_model->get_drives();
        $data['main_view'] = "drives/index_drive";
        $this->load->view('layouts/main', $data);
    }

    public function display_drive($drive_ID) {

        $data['drive_data'] = $this->drive_model->get_drive($drive_ID);
        $data['main_view'] = "drives/display_drive";
        $this->load->view('layouts/main', $data);
    }

    public function create_drive() {

        //$this->form_validation->set_rules('taxi_driver_ID', '"Taxi driver ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('car_ID', '"car ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('shift_ID', '"Shift ID"', 'trim|required|integer');
        $this->form_validation->set_rules('from_address', '"Address of starting location"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('to_address', '"Address of destination"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('distance', '"Distance travelled"', 'trim|required|numeric');
        $this->form_validation->set_rules('price_per_km', '"Price per kilometer"', 'trim|required|numeric');
        $this->form_validation->set_rules('amount_earned', '"Earned money"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['taxi_driver_ID'] = $this->drive_model->get_details_ID('taxi_driver');
            $data['car_ID'] = $this->drive_model->get_details_ID('car');
            $data['shift_ID'] = $this->drive_model->get_details_ID('shift');

            $data['main_view'] = 'drives/create_drive';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'taxi_driver_ID' => $this->input->post('taxi_driver_ID'),
                'car_ID' => $this->input->post('car_ID'),
                'shift_ID' => $this->input->post('shift_ID'),
                'from_address' => $this->input->post('from_address'),
                'to_address' => $this->input->post('to_address'),
                'distance' => $this->input->post('distance'),
                'price_per_km' => $this->input->post('price_per_km'),
                'amount_earned' => $this->input->post('amount_earned')
            );

            if ($this->drive_model->create_drive($data)) {

                $this->session->set_flashdata('drive_created','New drive added succesfully.');
                redirect('drives/index_drive');
            }
        }
    }

    public function update_drive($drive_ID) {

        //$this->form_validation->set_rules('taxi_driver_ID', '"Taxi driver ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('car_ID', '"car ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('shift_ID', '"Shift ID"', 'trim|required|integer');
        $this->form_validation->set_rules('from_address', '"Address of starting location"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('to_address', '"Address of destination"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('distance', '"Distance travelled"', 'trim|required|numeric');
        $this->form_validation->set_rules('price_per_km', '"Price per kilometer"', 'trim|required|numeric');
        $this->form_validation->set_rules('amount_earned', '"Earned money"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['taxi_driver_ID'] = $this->drive_model->get_details_ID('taxi_driver');
            $data['car_ID'] = $this->drive_model->get_details_ID('car');
            $data['shift_ID'] = $this->drive_model->get_details_ID('shift');

            $data['drive_data'] = $this->drive_model->get_drive_info($drive_ID);

            $data['main_view'] = 'drives/edit_drive';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'taxi_driver_ID' => $this->input->post('taxi_driver_ID'),
                'car_ID' => $this->input->post('car_ID'),
                'shift_ID' => $this->input->post('shift_ID'),
                'from_address' => $this->input->post('from_address'),
                'to_address' => $this->input->post('to_address'),
                'distance' => $this->input->post('distance'),
                'price_per_km' => $this->input->post('price_per_km'),
                'amount_earned' => $this->input->post('amount_earned')
            );

            if ($this->drive_model->update_drive($drive_ID, $data)) {

                $this->session->set_flashdata('drive_updated','Drive updated succesfully.');
                redirect('drives/index_drive');
            }
        }
    }

    public function delete_drive($drive_ID) {

        $this->drive_model->delete_drive($drive_ID);
        $this->session->set_flashdata('drive_deleted','Drive deleted succesfully.');
        redirect('drives/index_drive');
    }
}

?>