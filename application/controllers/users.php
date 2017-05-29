<?php

class Users extends CI_Controller {


    public function register() {

        $this->form_validation->set_rules('first_name', '"First Name"', 'trim|required|min_length[3]|max_length[45]');
        $this->form_validation->set_rules('last_name', '"Last Name"', 'trim|required|min_length[2]|max_length[45]');
        $this->form_validation->set_rules('email', '"Email"', 'trim|required|valid_email|max_length[45]');
        $this->form_validation->set_rules('username', '"Username"', 'trim|required|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[2]|max_length[255]');
        $this->form_validation->set_rules('confirm_password', '"Confirm Password"', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/registration', $data);

        } else {

            if ($this->user_model->create_user()) {

                $this->session->set_flashdata('user_registered','User succesfully registered. Continue by logging in.');
                redirect('home/index');
            }
        }
    }

    public function login() {

        $this->form_validation->set_rules('username', '"Username"', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == FALSE) {

            $data = array(
                'errors' => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('home');

        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $users_ID = $this->user_model->login_user($username, $password);

            if ($users_ID) {

                $user_data = array(
                    'user_ID' => $users_ID,
                    'username' => $username,
                    'logged_in' => true
                );
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_success','Succesfully logged in as '.$username.'.');
                $data['main_view'] = "home_view";
                $this->load->view('layouts/main', $data);

            } else {

                $this->session->set_flashdata('login_failed','Incorrect Username or Password. Please try again.');
                redirect('home/index');
            }
        }
    }

    public function logout() {

        $this->session->sess_destroy();
        redirect('home/index');
    }

}

?>