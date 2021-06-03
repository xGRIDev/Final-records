<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class md_pembayaran extends CI_Model {
    function show_data()
    {
        $this->db->select('*');
        return $this->db->get('paid');
    }

    public function save_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_data($where, $table, $data)
    {
        $this->db->update($table, $data);
        $this->db->where($where);
    }

    public function edit_data($id_bayar)
    {
        $this->db->select('*');
		$this->db->join('transaksi_sewa', 'paid.id_transaksi = transaksi_sewa.id_transaksi','left');
		$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->where('paid.id_bayar=',$id_bayar);
		return $this->db->get('paid');
    }
}