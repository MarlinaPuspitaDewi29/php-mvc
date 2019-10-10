<?php

class About extends Controller
{
    public function index($nama = 'Marlina Puspita Dewi', $umur = 20, $status = 'Mahasiswa')
    {
        $data['nama'] = $nama;
        $data['umur'] = $umur;
        $data['pekerjaan'] = $status;
        $data['judul'] = 'About';

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }

    public function page()
    {
        $data['judul'] = 'Page';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}