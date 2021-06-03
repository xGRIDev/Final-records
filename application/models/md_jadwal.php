<?php

class md_jadwal extends CI_Model{

	function show_data()
	{
		
		$this->db->select('*');
		$this->db->join('member', 'transaksi_sewa.id_member = member.id_member','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->join('paid', 'transaksi_sewa.id_transaksi = paid.id_transaksi','left');
		$this->db->join('jam', 'transaksi_sewa.id_jam = jam.id_jam','left');
		$this->db->where('transaksi_sewa.tanggal>=CURRENT_DATE()');
		return $this->db->get('transaksi_sewa');
	}
}