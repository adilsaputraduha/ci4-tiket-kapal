<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminKategori extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_kategori');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_kategori')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_kategori')->update($data, array('kategoriId' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_kategori')->delete(array('kategoriId' => $id));
        return $query;
    }
}
