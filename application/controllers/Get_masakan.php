<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get_masakan extends CI_Controller {

public function __construct()
    {
        parent::__construct();
        $this->load->model('get_masakan_model','gt_masakan');
    }
    
	public function index()
	{
		$dt_masakan=$this->gt_masakan->get_masakan();
        echo json_encode($dt_masakan);
	}

	public function detail($id_masakan)
    {
        $dt_masakan=$this->gt_masakan->get_detail($id_masakan);
        echo json_encode ($dt_masakan);   
    }
}

/* End of file Get_masakan.php */
/* Location: ./application/controllers/Get_masakan.php */