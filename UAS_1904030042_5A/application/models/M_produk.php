<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function get_product()
    {
        $this->db->get('tabel_produk')->result_array();
    }

    public function create_product()
    {
        $data = [
            'name' => $this->input->post('nama'),
            'image' => $this->input->post('image'),
            'price' => $this->input->post('harga'),
            'disc' => $this->input->post('diskon'),
            'disc2' => $this->input->post('harga_diskon'),
            'rating' => $this->input->post('rating'),
        ];

        $this->db->insert('tabel_produk', $data);
    }

    public function edit_product()
    {

        $id = $this->input->post('id');
        $name = $this->input->post('nama');
        $image = $this->input->post('image');
        $price = $this->input->post('harga');
        $disc = $this->input->post('diskon');
        $disc2 = $this->input->post('harga_diskon');
        $rating = $this->input->post('rating');

        $data = [
            'id' => $id,
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'disc' => $disc,
            'disc2' => $disc2,
            'rating' => $rating
        ];

        $this->db->where('id', $id);
        $this->db->update('tabel_produk', $data);
    }

    public function delete_product($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tabel_produk');
    }
}
