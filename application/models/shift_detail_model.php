<?php

class Shift_detail_model extends CI_Model {

    public function get_shift_detail($shift_details_ID) {

        $this->db->where('ID', $shift_details_ID);
        $query = $this->db->get('shift_details');

        return $query->row();
    }

    public function get_shift_details() {

        $query = $this->db->get('shift_details');

        return $query->result();
    }

    public function create_shift_details($data) {

        $insert_query = $this->db->insert('shift_details',$data);

        return $insert_query;
    }

    public function update_shift_details($shift_details_ID, $data) {

        $this->db->where('ID',$shift_details_ID);
        $this->db->update('shift_details', $data);

        return true;
    }

    public function get_shift_details_info($shift_details_ID) {

        $this->db->where('ID',$shift_details_ID);
        $get_data = $this->db->get('shift_details');

        return $get_data->row();
    }

    public function delete_shift_details($shift_details_ID) {

        $this->db->where('ID',$shift_details_ID);
        $this->db->delete('shift_details');

        return true;
    }

}


?>