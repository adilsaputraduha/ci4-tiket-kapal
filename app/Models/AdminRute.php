<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminRute extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_rute');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_rute')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_rute')->update($data, array('ruteId' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_rute')->delete(array('ruteId' => $id));
        return $query;
    }
}
