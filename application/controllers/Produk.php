<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    //public $kat = 'produk.kategori';
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Produk_model');
    }

    public function index()
    {
        $data['judul'] = "Product Page";
        $data['produk'] = $this->Produk_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produkbaru", $data);
        $this->load->view("layout/footer");
    }
    public function kategori($kat)
    {
        $data['judul'] = "Halaman produk";
        $data['produk'] = $this->Produk_model->getKat($kat);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produk", $data);
        $this->load->view("layout/footer");
    }
    public function mouse()
    {
        $data['judul'] = "Halaman produk";
        $data['produk'] = $this->Produk_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['produk'] = $this->db->get_where('produk', ['kategori' => "Headset"])->row_array();
       
        $this->load->view("layout/header", $data);
        $this->load->view("produk/vw_produk", $data);
        $this->load->view("layout/footer");
    }
    
    function tambah()
    {
        $data['judul'] = "Add Product Page";

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama produk', 'required', [
            'required' => 'Nama produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori produk', 'required', [
            'required' => 'Nama Kategori Wajib di isi'
        ]);
        $this->form_validation->set_rules('brand', 'Brand produk', 'required', [
            'required' => 'Nama produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'harga Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("produk/vw_tb_produk", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kategori' => $this->input->post('kategori'),
                'brand' => $this->input->post('brand'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3048';
                $config['upload_path'] = './assets/images/produk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Produk_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Product Berhasil Ditambah!</div>');
            redirect('Produk');
        }
    }
    public function hapus($id)
    {
        $this->Produk_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data Produk tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-check-circle"></i>Data Produk Berhasil Dihapus!</div>');
        }
        redirect('Produk');
    }

    function edit($id)
    {
        $data['judul'] = "Edit Product Page";
        $data['produk'] = $this->Produk_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama', 'Nama produk', 'required', [
            'required' => 'Nama produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori produk', 'required', [
            'required' => 'Nama produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('brand', 'Brand produk', 'required', [
            'required' => 'Nama produk Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok', 'Stok', 'required', [
            'required' => 'Stok Wajib di isi'
        ]);
        $this->form_validation->set_rules('harga', 'Harga', 'required', [
            'required' => 'harga Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("produk/vw_ub_produk", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'kategori' => $this->input->post('kategori'),
                'brand' => $this->input->post('brand'),
                'stok' => $this->input->post('stok'),
                'harga' => $this->input->post('harga'),
                'id' => $this->input->post('id'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '3048';
                $config['upload_path'] = './assets/images/produk/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['produk']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/produk/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Produk_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Product Berhasil Diubah!</div>');
            redirect('Produk');
        }
    }
    
}
