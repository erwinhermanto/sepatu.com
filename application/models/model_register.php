<?php

class Model_register extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function insert($data) {
        $insert = $this->db->insert('toko', $data); //nama tabel, terus data yang mo di masukkan
        return $insert;
    }
}
?>