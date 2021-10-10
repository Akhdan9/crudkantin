<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trans extends CI_Controller {

	public function index()
	{
		$data['konten'] ="v_pesanan";
		$this->load->view('template_pelanggan', $data);
	}

	public function show_cart_items()
    {
        $dt['total_cart']=$this->cart->total_items();
        echo json_encode($dt);
    }

    public function tm_pesanan(){
        $data['total_seluruh']=$this->cart->total();
        $data['data_cart']= $this->cart->contents();
        echo json_encode($data);
    }

    public function tambah_cart($id_masakan, $jumlah,$no_meja)
    {
        $this->load->model('get_masakan_model','gt_masakan');
        $dt_detail = $this->gt_masakan->get_detail($id_masakan);

        $data = array(
            'id'    => $dt_detail->id_masakan,
            'no_meja'  => $no_meja,
            'qty'   => $jumlah,
            'price' => $dt_detail->harga,
            'name'  => $dt_detail->nama_masakan,
            
        );

        $tambah_cart=$this->cart->insert($data);
        if ($tambah_cart) {
            $dt['total_cart']=$this->cart->total_items();
            $dt['status'] = 1;
            echo json_encode($dt);
        } else {
            $dt['total_cart']=$this->cart->total_items();
            $dt['status'] = 0;
            echo json_encode($dt);
        }
    }

    public function simpan_bayar()
    {
        $this->load->model('get_masakan_model','gt_masakan');
        $buat_order=$this->gt_masakan->buat_order();
        if ($buat_order) {
            $dt_order=$this->gt_masakan->get_last_order();
            foreach ($this->cart->contents() as $item) {
                $object[]= array(
                    'id_order'=>$dt_order->id_order,
                    'id_masakan'=>$item['id'],
                    'no_meja'   => $item['no_meja'],
                    'jumlah'=>$item['qty']
                );
            }
        $masuk_data=$this->db->insert_batch('detail_order', $object);
        if ($masuk_data) {
            $this->gt_masakan->update_total($dt_order->id_order);

            $data['status']=1;
            $data['id_order']=$dt_order->id_order;
            $data['total']= $this->cart->total();
            $this->cart->destroy();
            echo json_encode($data);
        } else {
            $data['status']=0;
            echo json_encode($data);
            }
        }
    }

     public function hapus_cart($id='')
    {
    	$data = array(
    		'rowid' => $id,
    		'qty'	=> 0
    		);

    	$update_cart = $this->cart->update($data);
    	if ($update_cart) {
    		$dt['status'] = 1;
    		echo json_encode($dt);
    	} else {
    		$dt['status'] = 0;
    		echo json_encode($dt);
    	}
    }

    public function hapus_semua()
    {
    	$this->cart->destroy();
    	$data['status']=1;
    	echo json_encode($data);
    }
}

/* End of file Trans.php */
/* Location: ./application/controllers/Trans.php */