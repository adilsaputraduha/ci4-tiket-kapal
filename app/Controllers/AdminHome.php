<?php

namespace App\Controllers;

use App\Models\AdminJadwal;
use App\Models\AdminKapal;
use App\Models\AdminPemesanan;
use App\Models\AdminPenumpang;
use App\Models\AdminRute;
use App\Models\AdminUser;

class AdminHome extends BaseController
{
    public function index()
    {
        $modelKapal = new AdminKapal();
        $modelPenumpang = new AdminPenumpang();
        $modelJadwal = new AdminJadwal();
        $modelRute = new AdminRute();
        $modelPemesanan = new AdminPemesanan();
        $modelUser = new AdminUser();

        $rowKapal = $modelKapal->getData();
        $rowPenumpang = $modelPenumpang->getData();
        $rowJadwal = $modelJadwal->getData();
        $rowRute = $modelRute->getData();
        $rowPemesanan = $modelPemesanan->getData();
        $rowUser = $modelUser->getUser();

        $data = [
            'kapal' => count($rowKapal->getResult()),
            'penumpang' => count($rowPenumpang->getResult()),
            'jadwal' => count($rowJadwal->getResult()),
            'rute' => count($rowRute->getResult()),
            'pemesanan' => count($rowPemesanan->getResult()),
            'user' => count($rowUser->getResult()),
        ];
        return view('admin/view_home', $data);
    }
}
