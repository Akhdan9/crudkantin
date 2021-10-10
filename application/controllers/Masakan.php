<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masakan extends CI_Controller {

	public function index()
	{
		$data['konten']="v_masakan";
		$this->load->model('masakan_model','masakan');
		$data['data_masakan']=$this->masakan->get_masakan();
		$this->load->view('template', $data, FALSE);
	}

	public function simpan_m()
	{
		$this->form_validation->set_rules('nama_masakan', 'Nama Masakan', 'trim|required',
		array('required' => 'Nama Masakan harus diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required',
		array('required' => 'Harga harus diisi'));
		$this->form_validation->set_rules('status_masakan', 'Status masakan', 'trim|required',
		array('required' => 'Status harus diisi'));

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('masakan_model','masakan');
			$kusam=$this->masakan->masuk_db();
			if ($kusam==true) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">sukses masuk</div>');
			
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">gagal masuk</div>');
		}
		redirect(base_url('index.php/masakan'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">'.validation_errors().'</div>');
			redirect(base_url('index.php/masakan'),'refresh');
		}
	}

	public function get_detail_m($id_masakan='')
	{
		$this->load->model('masakan_model');
		$data_detail=$this->masakan_model->detail_m($id_masakan);
		echo json_encode($data_detail);
	}

	public function update_m()
	{
		$this->form_validation->set_rules('nama_masakan', 'Nama Masakan', 'trim|required',
		array('required' => 'Nama Masakan harus diisi'));
		$this->form_validation->set_rules('harga', 'Harga', 'trim|required',
		array('required' => 'Harga harus diisi'));
		$this->form_validation->set_rules('status_masakan', 'Status masakan', 'trim|required',
		array('required' => 'Status harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">'.validation_errors().'</div>');
			redirect(base_url('index.php/masakan'),'refresh');
		} else {
			$this->load->model('masakan_model');
			$proses_update=$this->masakan_model->update_m();
			if($proses_update){
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Sukses cak</div>');
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal cak</div>');
			}
			redirect(base_url('index.php/masakan'),'refresh');
		}
	}

	public function hapus_m($id_masakan='')
	{
		$this->load->model('masakan_model','masakan');
		$hapus=$this->masakan->hapus_m($id_masakan);
		if($hapus){
			$this->session->set_flashdata('pesan', 'sukses hapus cak');
			} else {
				$this->session->set_flashdata('pesan', 'gagal hapus cak');
			}
			redirect(base_url('index.php/masakan'),'refresh');
	}
}

/* End of file Masakan.php */
/* Location: ./application/controllers/Masakan.php */