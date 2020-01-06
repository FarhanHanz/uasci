<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_model {

	public function prk()
	{
		return $this->db->get('produk');
	}

	public function save($data)
	{
		 return $this->db->insert('produk',$data);
	}

	public function getid($id)
	{
		$param=array('id' => $id);
		return $this->db->get_where('produk',$param);
	}

	// public function update($data,$id)
	// {
	// 	$this->db->where('id',$id);
	// 	$this->db->update('produk',$data);
	// }
}