<?php

namespace App\Controllers;

use App\Models\AdminJadwal;
use App\Models\AdminKapal;
use App\Models\AdminRute;

class AdminJadwalController extends BaseController
{
    public function index()
    {
        $model = new AdminJadwal();
        $modelsatu = new AdminKapal();
        $modeldua = new AdminRute();
        $data = [
            'jadwal' => $model->getData()->getResultArray(),
            'kapal' => $modelsatu->getData()->getResultArray(),
            'rute' => $modeldua->getData()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_jadwal', $data);
    }

    public function save()
    {
        $rules = [
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi',
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam harus diisi',
                ]
            ],
            'hargadewasa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Dewasa harus diisi',
                ]
            ],
            'hargaanak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Anak harus diisi',
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan harus diisi',
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminJadwal();
            $data = array(
                'jadwalKapal' => $this->request->getPost('kapal'),
                'jadwalRute' => $this->request->getPost('rute'),
                'jadwalTanggal' => $this->request->getPost('tanggal'),
                'jadwalJam' => $this->request->getPost('jam'),
                'jadwalKeterangan' => $this->request->getPost('keterangan'),
                'jadwalHargaDewasa' => $this->request->getPost('hargadewasa'),
                'jadwalHargaAnak' => $this->request->getPost('hargaanak'),
                'jadwalUpdatedAt' => date('Y-m-d H:i:s'),
                'jadwalCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveData($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/jadwal');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/jadwal')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'tanggal' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tanggal harus diisi',
                ]
            ],
            'jam' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jam harus diisi',
                ]
            ],
            'hargadewasa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Dewasa harus diisi',
                ]
            ],
            'hargaanak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harga Anak harus diisi',
                ]
            ],
            'keterangan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Keterangan harus diisi',
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminJadwal();
            $data = array(
                'jadwalKapal' => $this->request->getPost('kapal'),
                'jadwalRute' => $this->request->getPost('rute'),
                'jadwalTanggal' => $this->request->getPost('tanggal'),
                'jadwalJam' => $this->request->getPost('jam'),
                'jadwalKeterangan' => $this->request->getPost('keterangan'),
                'jadwalHargaDewasa' => $this->request->getPost('hargadewasa'),
                'jadwalHargaAnak' => $this->request->getPost('hargaanak'),
                'jadwalUpdatedAt' => date('Y-m-d H:i:s'),
            );
            $model->updateData($data, $id);
            session()->setFlashdata('success', 'Berhasil edit data');
            return redirect()->to('/admin/jadwal');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/jadwal')->withInput()->with('validation', $validation);
        }
    }

    public function delete()
    {
        $model = new AdminJadwal();
        $id = $this->request->getPost('id');
        $model->deleteData($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/jadwal');
    }

    public function laporan()
    {
        $model = new AdminJadwal();
        $data['jadwal'] = $model->getData()->getResultArray();
        echo view('/admin/report_jadwal', $data);
    }
}
