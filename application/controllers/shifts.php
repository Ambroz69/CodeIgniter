<?php

class Shifts extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_permission','Can\'t access the page. Please log in first.');
            redirect('home/index');
        }
    }

    public function index_shift() {

        $data['shifts'] = $this->shift_model->get_shifts();
        $data['main_view'] = "shifts/index_shift";
        $this->load->view('layouts/main', $data);
    }

    public function display_shift($shift_ID) {

        $data['shift_data'] = $this->shift_model->get_shift($shift_ID);
        $data['main_view'] = "shifts/display_shift";
        $this->load->view('layouts/main', $data);
    }

    public function create_shift() {


        $this->form_validation->set_rules('shift_details_ID', '"Shift details ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('start_date', '"Start date"', 'trim|required|integer');
        //$this->form_validation->set_rules('end_date', '"End date"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['shift_details_ID'] = $this->shift_model->get_shift_details_ID();
            $data['main_view'] = 'shifts/create_shift';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'shift_details_ID' => $this->input->post('shift_details_ID'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date')
            );

            if ($this->shift_model->create_shift($data)) {

                $this->session->set_flashdata('shift_created','New shift added succesfully.');
                redirect('shifts/index_shift');
            }
        }
    }

    public function update_shift($shift_ID) {

        $this->form_validation->set_rules('shift_details_ID', '"Shift details ID"', 'trim|required|integer');
        //$this->form_validation->set_rules('start_date', '"Start date"', 'trim|required|integer');
        //$this->form_validation->set_rules('end_date', '"End date"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['shift_details_ID'] = $this->shift_model->get_shift_details_ID();
            $data['shift_data'] = $this->shift_model->get_shift_info($shift_ID);
            $data['main_view'] = 'shifts/edit_shift';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'shift_details_ID' => $this->input->post('shift_details_ID'),
                'start_date' => $this->input->post('start_date'),
                'end_date' => $this->input->post('end_date')
            );

            if ($this->shift_model->update_shift($shift_ID, $data)) {

                $this->session->set_flashdata('shift_updated','Shift updated succesfully.');
                redirect('shifts/index_shift');
            }
        }
    }

    public function delete_shift($shift_ID) {

        $this->shift_model->delete_shift($shift_ID);
        $this->session->set_flashdata('shift_deleted','Shift deleted succesfully.');
        redirect('shifts/index_shift');
    }


}

?>