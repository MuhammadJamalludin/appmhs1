<?php

class JadwalKuliahModel
{
    private $table = 'jadwal_kuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllJadwalKuliah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getJadwalKuliahById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahJadwalKuliah($data)
    {
        // ... tambahkan logika untuk menambahkan data Jadwal Kuliah
    }

    public function updateDataJadwalKuliah($data)
    {
        // ... tambahkan logika untuk mengupdate data Jadwal Kuliah
    }

    public function deleteJadwalKuliah($id)
    {
        // ... tambahkan logika untuk menghapus data Jadwal Kuliah
    }

    public function cariJadwalKuliah()
    {
        // ... tambahkan logika untuk mencari data Jadwal Kuliah
    }
}
