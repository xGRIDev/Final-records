<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_Model {
    public function show_data()
    {
        $this->db->select('*');

        return $this->db->get('admin');
    }

    public function save_data($data, $table)
    {
        $this->db->insert($table,$data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table,$data);
    }
    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}