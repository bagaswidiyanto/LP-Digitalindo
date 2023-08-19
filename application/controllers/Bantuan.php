<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Bantuan extends CI_Controller
{
    function index()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $message = $this->input->post('message');

        $this->db->query("INSERT INTO lp_bantuan (nama,email,message) VALUES ('" . $nama . "','" . $email . "','" . $message . "') ");

        $this->load->helper('url');
    }
}
