<?php

namespace App\Controllers;

use App\Models\AdminJadwal;
use App\Models\AdminPemesanan;
use App\Models\AdminPenumpang;

class AdminPemesananController extends BaseController
{
    public function index()
    {
        $model = new AdminPemesanan();
        $data = [
            'pemesanan' => $model->getData()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_pemesanan', $data);
    }

    public function add()
    {
        $generateRandom = rand(1000, 9999);
        $generateDate = date('Ymd');
        $generateInvoice = 'INV-' . $generateDate . "-" . $generateRandom;

        $model = new AdminPemesanan();
        $modelsatu = new AdminPenumpang();
        $modeldua = new AdminJadwal();

        $data = [
            'detail' => $model->getDataDetail($generateInvoice)->getresultArray(),
            'penumpang' => $modelsatu->getData()->getResultArray(),
            'jadwal' => $modeldua->getData()->getResultArray(),
            'validation' => \Config\Services::validation(),
            'kode' => $generateInvoice
        ];
        echo view('/admin/view_tambah_pemesanan', $data);
    }

    public function update($id)
    {
        $model = new AdminPemesanan();
        $modelsatu = new AdminPenumpang();
        $modeldua = new AdminJadwal();
        $data = [
            'pemesanan' => $model->getInvoiceDetail($id)->getresultArray(),
            'detail' => $model->getDataDetail($id)->getresultArray(),
            'penumpang' => $modelsatu->getData()->getResultArray(),
            'jadwal' => $modeldua->getData()->getResultArray(),
            'validation' => \Config\Services::validation(),
            'kode' => $id
        ];
        echo view('/admin/view_update_pemesanan', $data);
    }

    public function laporan()
    {
        $model = new AdminPemesanan();
        $data['rute'] = $model->getData()->getResultArray();
        echo view('/admin/report_rute', $data);
    }

    public function apiindex()
    {
        $id = $this->request->getPost('invoice');

        $model = new AdminPemesanan();
        $data = [
            'detail' => $model->getDataDetail($id)->getresultArray()
        ];
        echo view('/admin/table_pemesanan', $data);
    }

    public function apisave()
    {
        $model = new AdminPemesanan();
        $data = array(
            'detailPemesananInvoice' => $this->request->getPost('invoice'),
            'detailJadwal' => $this->request->getPost('jadwal'),
            'detailQty' => $this->request->getPost('jumlah'),
            'detailHarga' => $this->request->getPost('total'),
        );
        $model->saveDetail($data);
    }

    public function apidelete()
    {
        $model = new AdminPemesanan();
        $id = $this->request->getPost('detailid');
        $model->deleteDetail($id);
    }

    public function savetransaction()
    {
        $model = new AdminPemesanan();
        $data = array(
            'pemesananInvoice' => $this->request->getPost('invoice'),
            'pemesananTanggal' => $this->request->getPost('tanggal'),
            'pemesananPenumpang' => $this->request->getPost('penumpang'),
            'pemesananTotalTiket' => $this->request->getPost('totalitem'),
            'pemesananTotalHarga' => $this->request->getPost('totalbayar'),
        );
        $model->saveTransaction($data);
    }

    public function edittransaction()
    {
        $id = $this->request->getPost('invoice');

        $model = new AdminPemesanan();
        $data = array(
            'pemesananTanggal' => $this->request->getPost('tanggal'),
            'pemesananPenumpang' => $this->request->getPost('penumpang'),
            'pemesananTotalTiket' => $this->request->getPost('totalitem'),
            'pemesananTotalHarga' => $this->request->getPost('totalbayar'),
        );
        $model->updateData($data, $id);
    }

    public function invoice($id)
    {
        $model = new AdminPemesanan();

        $data = [
            'pemesanan' => $model->getInvoiceDetail($id)->getresultArray(),
            'detail' => $model->getDataDetail($id)->getresultArray(),
            'invoice' => $id
        ];

        return view('/admin/report_tiket', $data);
    }
}
