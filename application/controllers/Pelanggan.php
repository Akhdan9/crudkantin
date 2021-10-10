<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	public function index()
	{
		$data['konten']="v_pelanggan";
		$this->load->model('pelanggan_model','pelanggan');
		$data['data_pelanggan']=$this->pelanggan->get_pelanggan();
		$this->load->view('template', $data, FALSE);
	}

	public function simpan_p()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required',
        array('required' => 'SEMUA HARUS DIISI !!'));
        if ($this->form_validation->run() == TRUE) {
            $this->load->model('pelanggan_model','pelanggan');
            $kusam=$this->pelanggan->masuk_db();
            if($kusam==true){
                $this->session->set_flashdata('pesan','Sukses Kusam');
            }
            else{
                $this->session->set_flashdata('pesan', 'Gagal Kusam');            
            }
            
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        } else {
            $this->session->set_flashdata('pesan', validation_errors());
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        }
    }

    public function get_detail_p($id_pelanggan='')
    {
        $this->load->model('pelanggan_model');
        $data_detail=$this->pelanggan_model->detail_p($id_pelanggan);
        echo json_encode($data_detail); 
    }

    public function update_p()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telp', 'Telp', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        

        
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('pesan', validation_errors());
            
            redirect(base_url('index.php/pelanggan'),'refresh');   
        } else {
            $this->load->model('pelanggan_model');
            $proses_update=$this->pelanggan_model->update_p();
            if($proses_update){
                $this->session->set_flashdata('pesan', 'sukses update');        
            } else {
                $this->session->set_flashdata('pesan', 'gagal update');
            }      
            redirect(base_url('index.php/pelanggan'),'refresh');
            
        }
        
    }

    public function hapus_p($id_pelanggan)
    {
        $this->load->model('pelanggan_model');
        $proses_delete = $this->pelanggan_model->hapus_p($id_pelanggan);

        if ($proses_delete == TRUE) {
        $this->session->set_flashdata('pesan', 'Sukses Hapus Data');
            
        } else {
            $this->session->set_flashdata('pesan', 'Gagal Hapus Data');
            
        }

        redirect(base_url('index.php/pelanggan'),'refresh');
        
    }

}

/* End of file Pelanggan.php */
/* Location: ./application/controllers/Pelanggan.php */