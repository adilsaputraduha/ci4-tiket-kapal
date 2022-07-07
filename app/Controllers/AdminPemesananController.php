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
        // Nomor otomatis
        $db = \Config\Database::connect();
        $query = $db->query("SELECT max(pemesananInvoice) as biggerCode FROM tb_pemesanan");
        $row = $query->getRowArray();
        $kodeTerbesar = $row['biggerCode'];
        $urutan = (int) substr($kodeTerbesar, 3, 1);
        $urutan++;
        $huruf = "INV-";
        $date = date('YmdH');
        $kodeInvoice = $huruf .  $date . sprintf("%03s", $urutan);

        $model = new AdminPemesanan();
        $modelsatu = new AdminPenumpang();
        $modeldua = new AdminJadwal();
        $data = [
            'pemesanan' => $model->getData()->getResultArray(),
            'penumpang' => $modelsatu->getData()->getResultArray(),
            'jadwal' => $modeldua->getData()->getResultArray(),
            'validation' => \Config\Services::validation(),
            'kode' => $kodeInvoice
        ];
        echo view('/admin/view_tambah_pemesanan', $data);
    }

    public function save()
    {
        $rules = [
            'asal' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Asal harus diisi',
                    'max_length' => 'Kolom asal tidak boleh lebih dari 20 karakter'
                ]
            ],
            'tujuan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Tujuan harus diisi',
                    'max_length' => 'Kolom tujuan tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminPemesanan();
            $data = array(
                'ruteAsal' => $this->request->getPost('asal'),
                'ruteTujuan' => $this->request->getPost('tujuan'),
                'ruteUpdatedAt' => date('Y-m-d H:i:s'),
                'ruteCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveData($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/rute');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/rute')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'asal' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Asal harus diisi',
                    'max_length' => 'Kolom asal tidak boleh lebih dari 20 karakter'
                ]
            ],
            'tujuan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Tujuan harus diisi',
                    'max_length' => 'Kolom tujuan tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminPemesanan();
            $data = array(
                'ruteAsal' => $this->request->getPost('asal'),
                'ruteTujuan' => $this->request->getPost('tujuan'),
                'ruteUpdatedAt' => date('Y-m-d H:i:s'),
            );
            $model->updateData($data, $id);
            session()->setFlashdata('success', 'Berhasil edit data');
            return redirect()->to('/admin/rute');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/rute')->withInput()->with('validation', $validation);
        }
    }

    public function delete()
    {
        $model = new AdminPemesanan();
        $id = $this->request->getPost('id');
        $model->deleteData($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/rute');
    }

    public function laporan()
    {
        $model = new AdminPemesanan();
        $data['rute'] = $model->getData()->getResultArray();
        echo view('/admin/report_rute', $data);
    }
}
