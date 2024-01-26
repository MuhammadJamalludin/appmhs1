<?php
class Matakuliah extends Controller
{
    public function __construct()
    {
        // Lakukan pengecekan login jika diperlukan
    }

    public function index()
    {
        $data['title'] = 'Data Matakuliah';
        $data['matakuliah'] = $this->model('MatakuliahModel')->getAllMatakuliah();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    public function cari()
    {
        $data['title'] = 'Data Matakuliah';
        $data['matakuliah'] = $this->model('MatakuliahModel')->cariMatakuliah();
        $data['key'] = $_POST['key'];
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('matakuliah/index', $data);
        $this->view('templates/footer');
    }

    public function edit($id)
    {
        $data['title'] = 'Detail Matakuliah';
        $data['matakuliah'] = $this->model('MatakuliahModel')->getMatakuliahById($id);
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('matakuliah/edit', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Matakuliah';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('matakuliah/create', $data);
        $this->view('templates/footer');
    }

    public function simpanMatakuliah()
    {
        // Implementasi logika penyimpanan matakuliah ke dalam database
    }

    public function updateMatakuliah()
    {
        // Implementasi logika update data matakuliah di dalam database
    }

    public function hapus($id)
    {
        // Implementasi logika penghapusan matakuliah dari database
    }
}
