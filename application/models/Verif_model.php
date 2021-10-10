 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif_model extends CI_Model {

	public function detail($id_order)
	{
		return $this->db->join('pelanggan', 'pelanggan.id_pelanggan = pesan.id_pelanggan')
		->where('id_order',$id_order)
		->get('pesan')
		->row();
	}

	public function update()
	{
		$data = array('status_order' =>  $this->input->post('ubah_status'));

		$this->db->where('id_order', $this->input->post('id_order'))->update('pesan',$data);

		if ($this->db->affected_rows()>0) {
			return true;
		}
		else
		{
			return false;
		}
	}

	public function riwayat($id)
	{
		return $this->db->select('detail_order.id_order, pelanggan.nama, pesan.tanggal,detail_order.no_meja, pesan.total_bayar')
		->join('pesan','pesan.id_order=detail_order.id_order')
		->join('pelanggan', 'pelanggan.id_pelanggan=pesan.id_pelanggan')
		->where('id_detail_order',$id)
		->get('detail_order')
		->result();
	}

	

}

/* End of file Verif_model.php */
/* Location: ./application/models/Verif_model.php */