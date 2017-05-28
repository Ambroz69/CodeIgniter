<?php

class Taxi_driver_model extends CI_Model {

    public function get_taxi_driver($taxi_driver_ID) {

        $this->db->where('ID', $taxi_driver_ID);
        $query = $this->db->get('taxi_driver');

        return $query->row();
    }

    public function get_taxi_drivers() {

        $query = $this->db->get('taxi_driver');

        return $query->result();
    }

    public function create_taxi_driver($data) {

        $insert_query = $this->db->insert('taxi_driver',$data);

        return $insert_query;
    }

    public function update_taxi_driver($taxi_driver_ID, $data) {

        $this->db->where('ID',$taxi_driver_ID);
        $this->db->update('taxi_driver', $data);

        return true;
    }

    public function get_taxi_driver_info($taxi_driver_ID) {

        $this->db->where('ID',$taxi_driver_ID);
        $get_data = $this->db->get('taxi_driver');

        return $get_data->row();
    }

    public function delete_taxi_driver($taxi_driver_ID) {

        $this->db->where('ID',$taxi_driver_ID);
        $this->db->delete('taxi_driver');

        return true;
    }

}


?>