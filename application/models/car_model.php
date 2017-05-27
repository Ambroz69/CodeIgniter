<?php

class Car_model extends CI_Model {

    public function get_cars() {

        //$this->db->where(['ID' => $users_ID]);
        $query = $this->db->get('car');
        return $query->result();

    }

}


?>