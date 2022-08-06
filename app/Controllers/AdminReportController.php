<?php

namespace App\Controllers;

use App\Models\AdminJadwal;
use App\Models\AdminKapal;
use App\Models\AdminPemesanan;
use App\Models\AdminPenumpang;
use App\Models\AdminRute;
use App\Models\AdminUser;

class AdminReportController extends BaseController
{
    public function index()
    {
        return view('admin/view_report');
    }

    public function reportpemesanan($tanggalawal, $tanggalakhir)
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT pemesananInvoice, pemesananTanggal, pemesananPenumpang,
        pemesananTotalTiket, pemesananTotalHarga, penumpangNama
        FROM tb_pemesanan
        JOIN tb_penumpang ON pemesananPenumpang = penumpangId
        WHERE pemesananTanggal BETWEEN '$tanggalawal' and '$tanggalakhir'");

        $data = [
            'pemesanan' => $query->getResultArray(),
            'tanggalawal' => $tanggalawal,
            'tanggalakhir' => $tanggalakhir,
        ];
        echo view('/admin/report_pemesanan', $data);
    }
}
