<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class md_pendaftaran extends CI_Model {
    public $nama_member;
    public $email;
    public $no_tlpn;
    public $alamat;
    public $username;
    public $password;

    public function save_data($table,$data)
    {
        $this->db->insert($table, $data);
    }
}