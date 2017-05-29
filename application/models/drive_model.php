<?php

class Drive_model extends CI_Model {

    public function get_drive($drive_ID) {

        $this->db->where('ID', $drive_ID);
        $query = $this->db->get('drive');

        return $query->row();
    }

    public function get_drives() {

        $query = $this->db->get('drive');

        return $query->result();
    }

    public function create_drive($data) {

        $insert_query = $this->db->insert('drive',$data);

        return $insert_query;
    }

    public function update_drive($drive_ID, $data) {

        $this->db->where('ID',$drive_ID);
        $this->db->update('drive', $data);

        return true;
    }

    public function get_drive_info($drive_ID) {

        $this->db->where('ID',$drive_ID);
        $get_data = $this->db->get('drive');

        return $get_data->row();
    }

    public function delete_drive($drive_ID) {

        $this->db->where('ID',$drive_ID);
        $this->db->delete('drive');

        return true;
    }

    public function get_details_ID($table_name) {

        $query = $this->db->query('SELECT ID FROM '.$table_name);

        return $query->result();
    }
}


?>