<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home Page';

        $identitas = [
            'a' => ['nama' => 'Ujang', 'umur' => '25', 'alamat' => 'Cimahi'],
            'b' => ['nama' => 'Sueb', 'umur' => '30', 'alamat' => 'Batujajar']
        ];
        $data['identitas'] = $identitas;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('home', $data);
        $this->load->view('layout/footer');
    }
    public function about()
    {

        $data = [
            'title' => 'Latihan Array',
            'nama' => 'joko',
            'umur' => 36
        ];
        $data['alamat'] = 'Batujajar';
        $j = $data;
        // var_dump($j);
        // die;

        $this->load->view('layout/header', $data);
        $this->load->view('layout/nav');
        $this->load->view('about', $data);
        $this->load->view('layout/footer');
    }
}
