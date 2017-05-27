<?php

class Users extends CI_Controller {

    public function show() {

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

    }

    public function register() {

        $this->form_validation->set_rules('first_name', '"First Name"', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', '"Last Name"', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('email', '"Username"', 'trim|required|min_length[5]');
        $this->form_validation->set_rules('username', '"Username"', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', '"Password"', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('confirm_password', '"Confirm Password"', 'trim|required|matches[password]');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);

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
        //$this->form_validation->set_rules('confirm_password', '"Confirm Password"', 'trim|required|min_length[2]|matches[password]');
        // for matching passwords (also in login_view.php)

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
                //redirect('home/index');
                $data['main_view'] = "admin_view";
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