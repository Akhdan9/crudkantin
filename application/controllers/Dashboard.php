<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['konten']="home";
		$this->load->view('template',$data);
	}

	public function kasir()
	{
		$this->load->model('dashboard_model');
		$data['data_pel'] = $this->dashboard_model->get_order();
		$data['konten'] = "v_konfirm";
		$this->load->view('template', $data, FALSE);
	}

	public function nota()
	{
		$this->load->model('dashboard_model');
		$data['data_nota'] = $this->dashboard_model->get_nota();
		$data['konten'] = "v_detail";
		$this->load->view('template', $data);
	}

	public function cetak($id_order)
	{
		$this->load->model('dashboard_model');
		$data['nota'] = $this->dashboard_model->cetak($id_order);
		$this->load->view('v_nota', $data);
	}
	
	public function search()
	{
		$tgl = $this->input->post('tanggal');
		if ($tgl == null) {
			redirect('dashboard/nota','refresh');
		}
		else {
			$data['konten'] = 'v_konfirm';
			$this->load->model('dashboard_model');
			$data['data_pel'] = $this->dashboard_model->search($tgl);
			$this->load->view('template', $data);
		}
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */