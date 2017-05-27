<?php

class User_model extends CI_Model {

    public function get_users($users_ID) {

        $this->db->where(['ID' => $users_ID]);
        $query = $this->db->get('users');
        return $query->result();
        //$this->db->where('ID', $users_ID);


        //$query = $this->db->query("SELECT * FROM users");
        //return $query->num_fields();    //pocet stlpcov


    }

    public function create_users($data) {

        $this->db->insert('users', $data);

    }

    public function update_users($data, $ID) {

        $this->db->where(['ID' => $ID]);
        $this->db->update('users', $data);

    }

    public function delete_users($ID) {

        $this->db->where(['ID' => $ID]);
        $this->db->delete('users');

    }

    public function login_user($username, $password) {

        $this->db->where('username', $username);
        $result = $this->db->get('users');

        $db_password = $result->row(5)->password;

        if (password_verify($password, $db_password)) {

            return $result->row(0)->ID;

        } else {

            return false;

        }

    }

    public function create_user() {

        $options = ['cost' => 12];
        $encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encrypted_pass
        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;

    }



}

?>