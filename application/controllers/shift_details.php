<?php

class Shift_details extends CI_Controller {

    public function __construct() {

        parent::__construct();

        if (!$this->session->userdata('logged_in')) {

            $this->session->set_flashdata('no_permission','Can\'t access the page. Please log in first.');
            redirect('home/index');
        }
    }

    public function index_shift_details() {

        $data['shift_details'] = $this->shift_detail_model->get_shift_details();
        $data['main_view'] = "shift_details/index_shift_details";
        $this->load->view('layouts/main', $data);
    }

    public function display_shift_details($shift_details_ID) {

        $data['shift_details_data'] = $this->shift_detail_model->get_shift_detail($shift_details_ID);
        $data['main_view'] = "shift_details/display_shift_details";
        $this->load->view('layouts/main', $data);
    }

    public function create_shift_details() {

        $this->form_validation->set_rules('type', '"Type"', 'trim|required');
        //$this->form_validation->set_rules('shift_start', '"Shift start time"', 'trim|required|exact_length[8]');
        //$this->form_validation->set_rules('shift_end', '"Shift end time"', 'trim|required|exact_length[8]');
        $this->form_validation->set_rules('hourly_wage', '"Hourly wage"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'shift_details/create_shift_details';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'type' => $this->input->post('type'),
                'shift_start' => $this->input->post('shift_start'),
                'shift_end' => $this->input->post('shift_end'),
                'hourly_wage' => $this->input->post('hourly_wage')
            );

            if ($this->shift_detail_model->create_shift_details($data)) {

                $this->session->set_flashdata('shift_details_created','Shift details added succesfully.');
                redirect('shift_details/index_shift_details');
            }
        }
    }

    public function update_shift_details($shift_details_ID) {

        $this->form_validation->set_rules('type', '"Type"', 'trim|required');
        //$this->form_validation->set_rules('shift_start', '"Shift start time"', 'trim|required|exact_length[8]');
        //$this->form_validation->set_rules('shift_end', '"Shift end time"', 'trim|required|exact_length[8]');
        $this->form_validation->set_rules('hourly_wage', '"Hourly wage"', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['shift_details_data'] = $this->shift_detail_model->get_shift_details_info($shift_details_ID);
            $data['main_view'] = 'shift_details/edit_shift_details';
            $this->load->view('layouts/main', $data);

        } else {

            $data = array(
                'type' => $this->input->post('type'),
                'shift_start' => $this->input->post('shift_start'),
                'shift_end' => $this->input->post('shift_end'),
                'hourly_wage' => $this->input->post('hourly_wage')
            );

            if ($this->shift_detail_model->update_shift_details($shift_details_ID, $data)) {

                $this->session->set_flashdata('shift_details_updated','Shift details updated succesfully.');
                redirect('shift_details/index_shift_details');
            }
        }
    }

    public function delete_shift_details($shift_details_ID) {

        $this->shift_detail_model->delete_shift_details($shift_details_ID);
        $this->session->set_flashdata('shift_details_deleted','Shift details deleted succesfully.');
        redirect('shift_details/index_shift_details');
    }
}

?>