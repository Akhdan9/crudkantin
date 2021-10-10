<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verif extends CI_Controller {

	public function get_detail_order($id_order)
	{
		$this->load->model('Verif_model','verifikasi');
		$data_detail = $this->verifikasi->detail($id_order);
		echo json_encode($data_detail);
	}

	public function update()
	{
		$this->load->model('Verif_model','verifikasi');
		$this->form_validation->set_rules('ubah_status', 'fieldlabel', 'trim|required');

		if ($this->form_validation->run() == TRUE) 
		{
			if ($this->verifikasi->update()==true) 
			{
				$this->session->flashdata('pesan','berhasil ubah');
			}
			else
			{
				$this->session->flashdata('pesan','gagal ubah');
			}
			redirect('Dashboard/kasir','refresh');
		} 
		else 
		{
			$this->session->flashdata('pesan',validation_errors());
			redirect('Dashboard/kasir','refresh');
		}
	}

	public function get_detail_by_id($id)
	{
		$this->load->model('Verif_model');
		$detail_trans = $this->Verif_model->riwayat($id);
		$data['show_detail']="";
		$total=0;
		$no=1;
		$data['show_detail'] .= '<table class="table table-striped">
		<tr>
		<th>No</th>
		<th>ID Order</th>
		<th>Nama Pelanggan</th>
		<th>NO. meja</th>
		<th>Total Bayar</th>
		</tr>';

		foreach ($detail_trans as $d) 
		{
			$data['show_detail'] .= '<tr>
			<td>'.$no.'</td>
			<td>'.$d->id_order.'</td>
			<td>'.$d->nama.'</td>
			<td>'.$d->no_meja.'</td>
			<td>'.$d->total_bayar.'</td>	
			</tr>';
			$no++;
			$total += $d->total_bayar;
		}
		$data['show_detail'] .='</table>';
		$data['show_detail'] .='<h3><p class="text-right">Total Belanja:</p></h3>
		<h2><p class="text-right">Rp '.$total.',- </p></h2>';
		echo json_encode($data);
	}

	
}

/* End of file Verif.php */
/* Location: ./application/controllers/Verif.php */