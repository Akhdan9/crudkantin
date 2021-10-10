<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function get_user()
	{
		return $this->db->join('level','level.id_level=user.id_level')->get('user')->result();
	}	

	public function masuk_db()
	{
		
			$data_u=array(
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'),
				'nama_user'=>$this->input->post('nama_user'),
				'id_level'=>$this->input->post('id_level'),
			);
			$sql_kusam=$this->db->insert('user', $data_u);
			return $sql_kusam;	
	}

	public function detail_u($id_user)
	{
		return $this->db->where('id_user',$id_user)->get('user')->row();
	}

	public function update_u()
	{
		
		$dt_up_user=array(
			'nama_user'=>$this->input->post('nama_user'),
			'username' =>$this->input->post('username'),
			'password' =>$this->input->post('password'),
			'id_level' => $this->input->post('id_level')
		);
	return $this->db->where('id_user',$this->input->post('id_user'))->update('user', $dt_up_user);
	}

	public function hapus_u($id_user)
	{
		return $this->db->where('id_user',$id_user)->delete('user');
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */