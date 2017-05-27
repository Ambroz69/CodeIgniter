<?php

class Users extends CI_Controller {

    /*public function show() {

        //$this->load->model('user_model');
        //$result = $this->user_model->get_users();
        $data['results'] = $this->user_model->get_users(2);

        $this->load->view('user_view',$data);

    }

    public function insert() {

        $username = "Dominik";
        $password = "vole";

        $this->user_model->create_users([
            'username' => $username,
            'password' => $password
        ]);

    }

    public function update() {

        $ID = 3;
        $username = "Dominik Pecuch";
        $password = "vole vole";

        $this->user_model->update_users([
            'username' => $username,
            'password' => $password
        ],$ID);

    }

    public function delete() {

        $ID = 3;
        $this->user_model->delete_users($ID);

    }*/

    public function login() {

        $this->form_validation->set_rules('username', '"Username"', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[2]');
        //echo $this->input->post('username');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'errors' => validation_errors()

            );
            $this->session->set_flashdata($data);
            redirect('home');

        }

    }
}

?>