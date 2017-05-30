<?php

class Chart_model extends CI_Model {

    function __construct() {

        parent::__construct();
    }

    public function get_data($querySQL) {

        $query = $this->db->query(''.$querySQL);

        return $query->result();
    }

}

?>