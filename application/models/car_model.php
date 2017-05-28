<?php

class Car_model extends CI_Model {

    public function get_car($car_ID) {

        $this->db->where('ID', $car_ID);
        $query = $this->db->get('car');

        return $query->row();
    }

    public function get_cars() {

        $query = $this->db->get('car');

        return $query->result();
    }

    public function create_car($data) {

        $insert_query = $this->db->insert('car',$data);

        return $insert_query;
    }

    public function update_car($car_ID, $data) {

        $this->db->where('ID',$car_ID);
        $this->db->update('car', $data);

        return true;
    }

    public function get_car_info($car_ID) {

        $this->db->where('ID',$car_ID);
        $get_data = $this->db->get('car');

        return $get_data->row();
    }

    public function delete_car($car_ID) {

        $this->db->where('ID',$car_ID);
        $this->db->delete('car');

        return true;
    }

}


?>