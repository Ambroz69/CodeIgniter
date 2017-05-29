<?php

class Shift_model extends CI_Model {

    public function get_shift($shift_ID) {

        $this->db->where('ID', $shift_ID);
        $query = $this->db->get('shift');

        return $query->row();
    }

    public function get_shifts() {

        $query = $this->db->get('shift');

        return $query->result();
    }

    public function create_shift($data) {

        $insert_query = $this->db->insert('shift',$data);

        return $insert_query;
    }

    public function update_shift($shift_ID, $data) {

        $this->db->where('ID',$shift_ID);
        $this->db->update('shift', $data);

        return true;
    }

    public function get_shift_info($shift_ID) {

        $this->db->where('ID',$shift_ID);
        $get_data = $this->db->get('shift');

        return $get_data->row();
    }

    public function delete_shift($shift_ID) {

        $this->db->where('ID',$shift_ID);
        $this->db->delete('shift');

        return true;
    }

    public function get_shift_details_ID() {

        $query = $this->db->query('SELECT ID FROM shift_details');

        return $query->result();
    }

}


?>