<?php

class MatakuliahModel
{
    private $table = 'matakuliah';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatakuliah()
    {
        $this->db->query('SELECT * FROM ' . $this->table);

        return $this->db->resultSet();
    }

    public function getMatakuliahById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahMatakuliah($data)
    {
        $query = "INSERT INTO matakuliah(kode_matakuliah, nama_matakuliah, sks) VALUES (:kode_matakuliah, :nama_matakuliah, :sks)";
        $this->db->query($query);
        $this->db->bind('kode_matakuliah', $data['kode_matakuliah']);
        $this->db->bind('nama_matakuliah', $data['nama_matakuliah']);
        $this->db->bind('sks', $data['sks']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateDataMatakuliah($data)
    {
        $query = 'UPDATE matakuliah SET kode_matakuliah=:kode_matakuliah, nama_matakuliah=:nama_matakuliah, sks=:sks WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('kode_matakuliah', $data['kode_matakuliah']);
        $this->db->bind('nama_matakuliah', $data['nama_matakuliah']);
        $this->db->bind('sks', $data['sks']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteMatakuliah($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariMatakuliah()
    {
        $key = $_POST['key'];
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nama_matakuliah LIKE :key');
        $this->db->bind('key', "%$key%");

        return $this->db->resultSet();
    }
}
