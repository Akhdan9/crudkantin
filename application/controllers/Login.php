<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function proses_login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required',array('required' => 'Username harus diisi'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required',array('required' => 'Password harus diisi'));

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', validation_errors());
			redirect(base_url('index.php/login'));
		} else {
			$this->load->model('login_model');
			$cek_login=$this->login_model->get_login();
			if ($cek_login->num_rows()>0) {
				$dt_login=$cek_login->row();
				$array = array(
					'id_user' => $dt_login->id_user,
					'username' => $dt_login->username,
					'password' => $dt_login->password,
					'nama_user' => $dt_login->nama_user,
					 'login' => true,
					'id_level' => $dt_login->id_level
				);
				$this->session->set_userdata($array);
				redirect(base_url('index.php/dashboard'));
			} else {
				$this->session->set_flashdata('pesan', 'username dan password tidak cocok');
				redirect(base_url('index.php/login'));
			}
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */