<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

    public function index()
    {
        $this->load->view('buku/tampilbuku');
    }
    
    function create()
    {
        $this->load->view('buku/tambahbuku');
    }

}