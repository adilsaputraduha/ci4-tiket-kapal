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
    public function getInvoiceDetail($id)
    {
        $bulder = $this->db->table('tb_pemesanan')
            ->join('tb_penumpang', 'penumpangId = pemesananPenumpang')
            ->where(['pemesananInvoice' => $id]);
        return $bulder->get();
    }
    public function saveTransaction($data)
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
    public function getDataDetail($id)
    {
        $bulder = $this->db->table('tb_detail_pemesanan')
            ->join('tb_jadwal', 'jadwalId = detailJadwal')
            ->join('tb_kapal', 'kapalId = jadwalKapal')
            ->join('tb_rute', 'ruteId = jadwalRute')
            ->where(['detailPemesananInvoice' => $id]);
        return $bulder->get();
    }
    public function saveDetail($data)
    {
        $query = $this->db->table('tb_detail_pemesanan')->insert($data);
        return $query;
    }
    public function deleteDetail($id)
    {
        $query = $this->db->table('tb_detail_pemesanan')->delete(array('detailId' => $id));
        return $query;
    }
}
