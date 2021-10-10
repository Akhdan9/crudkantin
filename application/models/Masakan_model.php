<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masakan_model extends CI_Model {

	public function get_masakan()
	{
		return $this->db->get('masakan')->result();
	}

	public function masuk_db()
	{
		$config['upload_path'] = './assets/gambar';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size']  = '1000000';
        $config['max_width']  = '102400';
        $config['max_height']  = '76800';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload('gambar')){
            $this->session->set_flashdata('pesan', $this->upload->display_errors());
            return false;
            
        }
		else {
			$data_masakan=array(
			'nama_masakan'=>$this->input->post('nama_masakan'),
			'harga'=>$this->input->post('harga'),
			'status_masakan'=>$this->input->post('status_masakan'),
			'gambar' => $this->upload->data('file_name'),
			);
		$sql_masuk=$this->db->insert('masakan', $data_masakan);
		return $sql_masuk;
		}
	}

	public function detail_m($id_masakan)
	{
		return $this->db->where('id_masakan',$id_masakan)->get('masakan')->row();
	}

	public function update_m()
	{
		$nama_gambar = $_FILES['gambar']['name'];
        if($nama_gambar!=""){
            
            $config['upload_path'] = './assets/gambar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']  = '1000000';
            $config['max_width']  = '1024000';
            $config['max_height']  = '768000';
            
            $this->load->library('upload', $config);
            
            if ( ! $this->upload->do_upload('gambar')){
                 $this->session->set_flashdata('pesan', $this->upload->display_errors());
                 
                 return false;           
            }
		else {
			$dt_up_m=array(
				'nama_masakan'=>$this->input->post('nama_masakan'),
				'harga'=>$this->input->post('harga'),
				'status_masakan'=>$this->input->post('status_masakan'),
				'gambar'=> $this->upload->data('file_name')
		);
			return $this->db->where('id_masakan',$this->input->post('id_masakan'))->update('masakan', $dt_up_m);
		}
		} else {
			$dt_up_m=array(
                'nama_masakan'=> $this->input->post('nama_masakan'),
                'harga'=> $this->input->post('harga'),
                'status_masakan'=>$this->input->post('status_masakan'),
                
            );
            return $this->db->where('id_masakan',$this->input->post('id_masakan'))
                            ->update('masakan', $dt_up_m);
		} 
	}

	public function hapus_m($id_masakan)
	{
		return $this->db->where('id_masakan',$id_masakan)->delete('masakan');
	}

}

/* End of file Masakan_model.php */
/* Location: ./application/models/Masakan_model.php */