<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk');
	}

	public function index()
	{
		$data['judul']="Tampil Data Produk";
		$data['tampil']=$this->M_produk->prk()->result();	
		$this->load->view('produk/tampil', $data, FALSE);
	}

	public function input()
	{	
		$data['judul']="Input Produk";
		$this->load->view('produk/input', $data, FALSE);
	}

	public function save()
	{
		$data=array(
		'id'=>$this->input->post('id'),
		'kode_produk'=>$this->input->post('kode_produk'),
		'nama_produk'=>$this->input->post('nama_produk'),
		'harga'=>$this->input->post('harga'),
		'stok'=>$this->input->post('stok')
		);

		$this->M_produk->save($data);
		redirect('produk','refresh');
	}

	// public function update()
	// {
	// 	$id=$this->input->post('id');
	// 	$data=array(
	// 	'id'=>$this->input->post('id'),
	// 	'kode_produk'=>$this->input->post('kode_produk'),
	// 	'nama_produk'=>$this->input->post('nama_produk'),
	// 	'harga'=>$this->input->post('harga'),
	// 	'stok'=>$this->input->post('stok')
	// 	);

	// 	$this->M_produk->update($data,$id);
	// 	redirect('produk','refresh');
	// }

	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id', $id);
		$this->db->delete('produk');
		redirect('produk','refresh');
	}
}