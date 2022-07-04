<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminJadwal extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_jadwal')
            ->join('tb_kapal', 'kapalId = jadwalKapal')
            ->join('tb_rute', 'ruteId = jadwalRute');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_jadwal')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_jadwal')->update($data, array('jadwalId' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_jadwal')->delete(array('jadwalId' => $id));
        return $query;
    }
}
