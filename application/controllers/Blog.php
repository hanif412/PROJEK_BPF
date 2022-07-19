<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        //$this->load->view("hello_codeigniter");
        $data['judul'] = "Judul Blog";
        $data['isi'] = "Isi Blog";
        $out = $this->load->view("blog_view", $data, true);
        //$this->load->view("blog_view", $data);
        echo $out;
    }
    
}

