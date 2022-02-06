<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function index()
    {
        $this->M_produk->create_product();
        redirect('produk');
    }

    public function edit()
    {
        $this->M_produk->edit_product();
        redirect('produk');
    }

    public function delete($id)
    {
        $this->M_produk->delete_product($id);
        redirect('produk');
    }
}
