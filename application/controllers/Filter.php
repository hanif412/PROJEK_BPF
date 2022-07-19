<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Filter extends CI_Controller
{

    public function index()
    {
        $data['title'] = "Cetak laporan berdasarkan filter data di PHP Codeigniter";
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('laporan/filter', $data);
    }

    public function filter($id)
    {
        if ($id == 0) {
            $data = $this->db->get('produk')->result();
        } else {
            $data = $this->db->get_where('produk', ['kategori' => $id])->result();
        }
        $dt['produk'] = $data;
        $dt['kategori'] = $id;
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produk", $data);
        $this->load->view("layout/footer");
    }

    public function cetak($id)
    {
        if ($id == 0) {
            $data = $this->db->get('produk')->result();
        } else {
            $data = $this->db->get_where('produk', ['kategori' => $id])->result();
        }
        $dt['produk'] = $data;
        $this->load->library('mypdf');
        $this->mypdf->generate('Laporan/cetak', $dt, 'laporan-produk', 'A4', 'portrait');
    }
}
