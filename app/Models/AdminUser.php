<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminUser extends Model
{
    public function getUser()
    {
        $bulder = $this->db->table('tb_user');
        return $bulder->get();
    }
    public function getUserDetail($id)
    {
        $bulder = $this->db->table('tb_user')->where('userId', $id);
        return $bulder->get();
    }
    public function saveUser($data)
    {
        $query = $this->db->table('tb_user')->insert($data);
        return $query;
    }
    public function updateUser($data, $id)
    {
        $query = $this->db->table('tb_user')->update($data, array('userId' => $id));
        return $query;
    }
    public function deleteUser($id)
    {
        $query = $this->db->table('tb_user')->delete(array('userId' => $id));
        return $query;
    }
}
