<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pel extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login_p');
	}

	public function proses()
	{
		$this->load->model('login_pel_model','l_pel');
		$login = $this->l_pel->cek_pel();
		if ($login->num_rows()>0) {
			$dt_pel = $login->row();
			$array = array(
				'id_pelanggan' => $dt_pel->id_pelanggan,
				'nama' => $dt_pel->nama,
				'username' => $dt_pel->username,
				'password' => md5($dt_pel->password),
				'login_pel' => true
				);

			$this->session->set_userdata($array);
			$data['status']=1;
			echo json_encode($data);
		} else {
			$data['status'] = 0;
			echo json_encode($data);
		}
	}

	public function simpan()
	{
		$this->load->model('login_pel_model','l_pel');
		$cek_data = $this->l_pel->tambah_pel();
		if($cek_data){
			$data['status'] = 1;
			$data['keterangan'] = "Anda Sukses Menambah Data";
			echo json_encode($data);
		} else {
			$data['status'] = 0;
			$data['keterangan'] = "Anda Gagal Menambah Data";
			echo json_encode($data);
		}
	}
}

/* End of file Login_pel.php */
/* Location: ./application/controllers/Login_pel.php */