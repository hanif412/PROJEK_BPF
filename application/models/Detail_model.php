<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_model extends CI_Model
{
    public $table = 'history_penjualan';
    public $id = 'history_penjualan.no_penjualan';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('k.*,s.nama as nama, s.harga as harga');
        $this->db->from('keranjang k');
        $this->db->join('produk s', 'k.id_produk = s.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('d.*,r.nama as nama, s.nama as produk');
        $this->db->from('history_penjualan d');
        $this->db->join('user r', 'd.id_user = r.id');
        $this->db->join('produk s', 'd.id_produk = s.id');
        $this->db->where('d.no_penjualan', $id,);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByUser($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->select('d.*,s.nama as nama_produk');
        $this->db->from('history_penjualan d');
        $this->db->join('produk s', 'd.id_produk = s.id');
        $this->db->where('d.no_penjualan', $id, 'AND d.id_user=' . $idu);
        $this->db->where('d.id_user=' . $idu);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }
    public function insert($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }
    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    function charts()
    {
        $this->db->select('d.*, s.nama as produk, sum(d.jumlah) as jum');
        $this->db->from('history_penjualan d');
        $this->db->join('produk s', 'd.id_produk = s.id');
        $this->db->group_by('d.id_produk');
        $query = $this->db->get();
        return $query->result_array();
    }

}
