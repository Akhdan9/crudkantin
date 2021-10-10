<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_pelanggan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('login_pel')!=true){
			redirect(base_url('index.php/login_pel'),'refresh');
		}
	}
	public function index()
	{
		$data['konten']="v_dashboard_pel";
		$this->load->view('template_pelanggan',$data);		
	}

}

/* End of file Dashboard_pelanggan.php */
/* Location: ./application/controllers/Dashboard_pelanggan.php */