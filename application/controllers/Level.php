<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

	public function index()
	{
		$data['konten']="v_level";
		$this->load->model('level_model','level');
		$data['data_level']=$this->level->get_level();
		$this->load->view('template', $data, FALSE);
	}

	public function simpan_l()
	{
		$this->form_validation->set_rules('nama_level', 'Nama level', 'trim|required',
		array('required' => 'nama level harus diisi'));

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('level_model','level');
			$kusam=$this->level->masuk_db();
			if($kusam==true){
				$this->session->set_flashdata('pesan', 'Sukses Kusam');
			} else {
				//$this->session->set_flashdata('pesan', 'gagal Kusam');
			}
			redirect(base_url('index.php/level'),'refresh');
		} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/level'),'refresh');

		}
	}

	public function update_l()
	{
		$this->form_validation->set_rules('nama_level', 'nama level', 'trim|required',array("required"=>"Nama level harus diisi"));
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/level'),'refresh');
		} else {
			$this->load->model('level_model');
			$proses_update=$this->level_model->update_l();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			} else {
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/level'),'refresh');
		}
	}

	public function hapus_level($id_level='')
	{
		$this->load->model('level_model','level');
		$hapus=$this->level->hapus_l($id_level);
		if($hapus){
			$this->session->set_flashdata('pesan', 'sukses hapus data');
			} else {
				$this->session->set_flashdata('pesan', 'gagal hapus data');
			}
			redirect(base_url('index.php/level'),'refresh');
	}

}

/* End of file Level.php */
/* Location: ./application/controllers/Level.php */