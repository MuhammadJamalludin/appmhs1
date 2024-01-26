<?php

class JadwalKuliah extends Controller
{
    public function __construct()
    {
        // Lakukan pengecekan login atau hal-hal lain yang diperlukan
        // Sesuaikan sesuai kebutuhan
    }

    public function index()
    {
        $data['title'] = 'Jadwal Kuliah';
        $data['jadwal_kuliah'] = $this->model('JadwalKuliahModel')->getAllJadwalKuliah();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jadwalkuliah/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Jadwal Kuliah';
        $data['jadwal_kuliah'] = $this->model('JadwalKuliahModel')->cariJadwalKuliah();
        $data['key'] = $_POST['key'];

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jadwalkuliah/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Jadwal Kuliah';
        $data['jadwal_kuliah'] = $this->model('JadwalKuliahModel')->getJadwalKuliahById($id);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jadwalkuliah/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Jadwal Kuliah';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('jadwalkuliah/create', $data);
        $this->view('templates/footer');
    }

    public function simpanJadwalKuliah()
    {
        // Implementasi logika simpan data ke dalam database
        // Sesuaikan dengan model dan kebutuhan aplikasi Anda
    }

    public function updateJadwalKuliah()
    {
        // Implementasi logika update data ke dalam database
        // Sesuaikan dengan model dan kebutuhan aplikasi Anda
    }

    public function hapus($id)
    {
        // Implementasi logika hapus data dari database
        // Sesuaikan dengan model dan kebutuhan aplikasi Anda
    }
}
