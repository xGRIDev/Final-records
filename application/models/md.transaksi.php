<?php

class md_transaksi extends CI_Model{

	function show_data()
	{
		$this->db->select('*');
		$this->db->join('user', 'transaksi_sewa.id = user.id','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->join('bayar', 'transaksi_sewa.id_transaksi = bayar.id_transaksi','left');
		$this->db->join('jam', 'transaksi_sewa.id_jam = jam.id_jam','left');
		$this->db->where('transaksi_sewa.tanggal>=CURRENT_DATE()');
		return $this->db->get('transaksi_sewa');
	}

	public function save_data($data,$table)
    {
        $this->db->insert($table,$data);
	}
	
	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data($id_transaksi)
	{		
		$this->db->select('*');
		$this->db->join('user', 'transaksi_sewa.id = user.id','left');
		$this->db->join('studio', 'transaksi_sewa.id_studio = studio.id_studio','left');
		$this->db->join('bayar', 'transaksi_sewa.id_transaksi = bayar.id_transaksi','left');
		$this->db->join('jam', 'transaksi_sewa.id_jam = jam.id_jam','left');
		$this->db->where('transaksi_sewa.id_transaksi=',$id_transaksi);
		return $this->db->get('transaksi_sewa');
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
}
