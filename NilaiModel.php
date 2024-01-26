<?php

class NilaiModel
{
    private $table = 'nilai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllNilai()
    {
        $query = 'SELECT nilai.*, mahasiswa.Nama AS NamaMahasiswa, matakuliah.nama_matakuliah
                  FROM ' . $this->table . '
                  JOIN mahasiswa ON mahasiswa.MahasiswaID = nilai.ID_Mahasiswa
                  JOIN matakuliah ON matakuliah.id = nilai.Kode_MataKuliah';

        $this->db->query($query);
        return $this->db->resultSet();
    }

    // ... Metode lainnya ...
}
