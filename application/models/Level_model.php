<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

	public function get_level()
	{
		return $this->db->get('level')->result();
	}

	public function masuk_db()
	{
		$data_level= array('nama_level'=>$this->input->post('nama_level'),
			);
		$sql_masuk=$this->db->insert('level', $data_level);
		return $sql_masuk;
	}

	public function detail_level($id_level)
	{
		return $this->db->where('id_level',$id_level)->get('level')->row();
	}
}

/* End of file Level_model.php */
/* Location: ./application/models/Level_model.php */