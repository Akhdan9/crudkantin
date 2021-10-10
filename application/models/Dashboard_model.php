<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

	public function get_order()
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = pesan.id_pelanggan')->get('pesan')->result();
	}

	public function get_nota()
	{
		return $this->db->join('pesan', 'pesan.id_order = detail_order.id_order')
						->join('pelanggan','pelanggan.id_pelanggan=pesan.id_pelanggan')
						->join('masakan','masakan.id_masakan=detail_order.id_masakan')
						->get('detail_order')->result();
	}

	public function cetak($id_order)
	{
		$data = $this->db->join('pelanggan','pelanggan.id_pelanggan = pesan.id_pelanggan')
						 ->where('pesan.id_order',$id_order)
						 ->join('detail_order','detail_order.id_order=pesan.id_order')
						 ->join('masakan','masakan.id_masakan=detail_order.id_masakan')
						 ->get('pesan')->result();
		return $data;				 	
	}

	public function search($tanggal)
	{
		$search = $this->db->join('pelanggan','pelanggan.id_pelanggan = pesan.id_pelanggan')
						 	->where('pesan.tanggal',$tanggal)
						 	->join('detail_order','detail_order.id_order=pesan.id_order')
						 	->join('masakan','masakan.id_masakan=detail_order.id_masakan')
						 	->get('pesan')->result();
		return $search;
	}	
	

}

/* End of file Dashboard_model.php */
/* Location: ./application/models/Dashboard_model.php */