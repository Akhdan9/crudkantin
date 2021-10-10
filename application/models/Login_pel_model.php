<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_pel_model extends CI_Model {

	public function cek_pel()
	{
		return $this->db->where('username',$this->input->post('username'))
					->where('password',md5($this->input->post('password')))
					->get('pelanggan');
	}

	public function tambah_pel(){
	$object = array(
		'nama' => $this->input->post('nama'),
		'alamat' => $this->input->post('alamat'),
		'telp' => $this->input->post('telp'),
		'username' => $this->input->post('username'),
		'password' => md5($this->input->post('password'))
		);
	return $this->db->insert('pelanggan', $object);
	}
}

/* End of file Login_pel_model.php */
/* Location: ./application/models/Login_pel_model.php */