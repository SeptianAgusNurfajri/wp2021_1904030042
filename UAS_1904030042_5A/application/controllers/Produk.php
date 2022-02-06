<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Data Produk';
        $data['breadcrumb'] = 'Produk';

        $data['produk'] = $this->db->get('tabel_produk')->result_array();
        $this->load->view('produk', $data);
    }
}
