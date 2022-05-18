<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminKapal extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_kapal');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_kapal')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_kapal')->update($data, array('kapalId' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_kapal')->delete(array('kapalId' => $id));
        return $query;
    }
}
