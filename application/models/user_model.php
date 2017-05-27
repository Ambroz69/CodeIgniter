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



}

?>