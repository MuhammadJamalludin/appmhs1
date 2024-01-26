<?php

class Nilai extends Controller
{
    public function __construct()
    {
        // tambahkan logika autentikasi atau middleware jika diperlukan
    }

    public function index()
    {
        $data['title'] = 'Data Nilai';
        $data['nilai'] = $this->model('NilaiModel')->getAllNilai();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('nilai/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Nilai';
        // Tambahkan logika untuk mengambil data yang dibutuhkan dari model jika diperlukan
        // Contoh: $data['mahasiswa'] = $this->model('MahasiswaModel')->getAllMahasiswa();

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('nilai/create', $data);
        $this->view('templates/footer');
    }

    public function simpanNilai()
    {
        // Logika untuk menyimpan data nilai ke dalam database
        // Gunakan model dan method yang sesuai

        // Redirect ke halaman index setelah penyimpanan
        header('location: ' . base_url . '/nilai');
        exit;
    }

    public function edit($id)
    {
        $data['title'] = 'Edit Nilai';
        // Tambahkan logika untuk mengambil data nilai berdasarkan ID dari model jika diperlukan
        // Contoh: $data['nilai'] = $this->model('NilaiModel')->getNilaiById($id);

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('nilai/edit', $data);
        $this->view('templates/footer');
    }

    public function updateNilai()
    {
        // Logika untuk melakukan update data nilai ke dalam database
        // Gunakan model dan method yang sesuai

        // Redirect ke halaman index setelah update
        header('location: ' . base_url . '/nilai');
        exit;
    }

    public function hapus($id)
    {
        // Logika untuk menghapus data nilai dari database
        // Gunakan model dan method yang sesuai

        // Redirect ke halaman index setelah penghapusan
        header('location: ' . base_url . '/nilai');
        exit;
    }
}
