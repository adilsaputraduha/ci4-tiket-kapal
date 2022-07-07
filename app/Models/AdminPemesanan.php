<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminPemesanan extends Model
{
    public function getData()
    {
        $bulder = $this->db->table('tb_pemesanan')
            ->join('tb_penumpang', 'penumpangId = pemesananPenumpang');
        return $bulder->get();
    }
    public function saveData($data)
    {
        $query = $this->db->table('tb_pemesanan')->insert($data);
        return $query;
    }
    public function updateData($data, $id)
    {
        $query = $this->db->table('tb_pemesanan')->update($data, array('pemesananInvoice' => $id));
        return $query;
    }
    public function deleteData($id)
    {
        $query = $this->db->table('tb_pemesanan')->delete(array('pemesananInvoice' => $id));
        return $query;
    }
}
