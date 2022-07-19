<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil_model extends CI_Model
{
    public $table = 'produk';
    public $id = 'produk.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->from($this->table);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();
        return $query->row_array();
    }
    
}