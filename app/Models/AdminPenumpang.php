<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminPenumpang extends Model
{
    public function getUser()
    {
        $bulder = $this->db->table('tb_penumpang');
        return $bulder->get();
    }
    public function getUserDetail($id)
    {
        $bulder = $this->db->table('tb_penumpang')->where('penumpangId', $id);
        return $bulder->get();
    }
    public function saveUser($data)
    {
        $query = $this->db->table('tb_penumpang')->insert($data);
        return $query;
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table('tb_penumpang')->update($data, array('penumpangId' => $id));
        return $query;
    }
    public function deleteUser($id)
    {
        $query = $this->db->table('tb_penumpang')->delete(array('penumpangId' => $id));
        return $query;
    }
}
