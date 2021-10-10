<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['konten']="v_user";
		$this->load->model('user_model','user');
		$data['data_user']=$this->user->get_user();
		$this->load->model('level_model','level');
		$data['data_level']=$this->level->get_level();
		$this->load->view('template',$data,FALSE);
	}

	public function simpan_u()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required',
		array('required' => 'Username harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',
		array('required' => 'Password harus diisi'));
		$this->form_validation->set_rules('nama_user', 'Nama_user', 'trim|required',
		array('required' => 'Password harus diisi'));
		$this->form_validation->set_rules('id_level', 'Id_level', 'trim|required',
		array('required' => 'Nama level harus diisi'));

		if ($this->form_validation->run() == TRUE) {
			$this->load->model('user_model','user');
			$kusam = $this->user->masuk_db();
			if ($kusam == true) {
				$this->session->Set_flashdata('pesan', 'Sukses Cak');
			} else {
				//$this->session->set_flashdata('pesan', 'Gagal Cak');
			}
			redirect(base_url('index.php/user'),'refresh');
			} else {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/user'),'refresh');
		}
	}

	public function get_detail_u($id_user='')
	{
		$this->load->model('user_model');
		$data_detail=$this->user_model->detail_u($id_user);
		echo json_encode($data_detail);
	}

	public function update_u()
	{
		$this->form_validation->set_rules('nama_user', 'nama user', 'trim|required',array("required"=>"Nama User harus diisi"));
		$this->form_validation->set_rules('username', 'username', 'trim|required',array("required"=>"Username harus diisi"));
		$this->form_validation->set_rules('password', 'password', 'trim|required',array("required"=>"Password harus diisi"));
		$this->form_validation->set_rules('id_level', 'id_level', 'trim|required',array("required"=>"Id_level harus diisi"));
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/user'),'refresh');
		} else {
			$this->load->model('user_model');
			$proses_update=$this->user_model->update_u();
			if($proses_update){
				$this->session->set_flashdata('pesan', 'sukses update');
			} else {
				$this->session->set_flashdata('pesan', 'gagal update');
			}
			redirect(base_url('index.php/user'),'refresh');
		}
	}

	public function hapus_u($id_user='')
	{
		$this->load->model('user_model','user');
		$hapus=$this->user->hapus_u($id_user);
		if($hapus){
			$this->session->set_flashdata('pesan', 'sukses hapus data');
			} else {
				$this->session->set_flashdata('pesan', 'gagal hapus data');
			}
			redirect(base_url('index.php/user'),'refresh');
	}
}



/* End of file User.php */
/* Location: ./application/controllers/User.php */