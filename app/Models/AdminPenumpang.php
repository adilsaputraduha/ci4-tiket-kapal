<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminPenumpang extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_penumpang');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_penumpang')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_penumpang')->update($data, array('penumpangId' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_penumpang')->delete(array('penumpangId' => $id));
        return $query;
    }
}
