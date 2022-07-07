<?php

namespace App\Controllers;

use App\Models\AdminKapal;
use App\Models\AdminKategori;

class AdminKapalController extends BaseController
{
    public function index()
    {
        $model = new AdminKapal();
        $modelsatu = new AdminKategori();
        $data = [
            'kapal' => $model->getData()->getResultArray(),
            'kategori' => $modelsatu->getData()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_kapal', $data);
    }

    public function save()
    {
        $rules = [
            'kode' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Kode harus diisi',
                    'max_length' => 'Kolom kode tidak boleh lebih dari 100 karakter'
                ]
            ],
            'nama' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 255 karakter'
                ]
            ],
            'kapasitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kapasitas harus diisi',
                    'max_length' => 'Kolom kapasitas tidak boleh lebih dari 255 karakter'
                ]
            ],
            'pemilik' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Pemilik harus diisi',
                    'max_length' => 'Kolom pemilik tidak boleh lebih dari 255 karakter'
                ]
            ],
            'keterangan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Keterangan harus diisi',
                    'max_length' => 'Kolom keterangan tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminKapal();
            $data = array(
                'kapalKode' => $this->request->getPost('kode'),
                'kapalNama' => $this->request->getPost('nama'),
                'kapalKategori' => $this->request->getPost('kategori'),
                'kapalKapasitas' => $this->request->getPost('kapasitas'),
                'kapalPemilik' => $this->request->getPost('pemilik'),
                'kapalFoto' => 'default.png',
                'kapalKeterangan' => $this->request->getPost('keterangan'),
                'kapalUpdatedAt' => date('Y-m-d H:i:s'),
                'kapalCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveData($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/kapal');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/kapal')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 255 karakter'
                ]
            ],
            'kapasitas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kapasitas harus diisi',
                    'max_length' => 'Kolom kapasitas tidak boleh lebih dari 255 karakter'
                ]
            ],
            'pemilik' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Pemilik harus diisi',
                    'max_length' => 'Kolom pemilik tidak boleh lebih dari 255 karakter'
                ]
            ],
            'keterangan' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Keterangan harus diisi',
                    'max_length' => 'Kolom keterangan tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminKapal();
            $data = array(
                'kapalNama' => $this->request->getPost('nama'),
                'kapalKategori' => $this->request->getPost('kategori'),
                'kapalKapasitas' => $this->request->getPost('kapasitas'),
                'kapalPemilik' => $this->request->getPost('pemilik'),
                'kapalFoto' => 'default.png',
                'kapalKeterangan' => $this->request->getPost('keterangan'),
                'kapalUpdatedAt' => date('Y-m-d H:i:s'),
            );
            $model->updateData($data, $id);
            session()->setFlashdata('success', 'Berhasil edit data');
            return redirect()->to('/admin/kapal');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/kapal')->withInput()->with('validation', $validation);
        }
    }

    public function delete()
    {
        $model = new AdminKapal();
        $id = $this->request->getPost('id');
        $model->deleteData($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/kapal');
    }

    public function laporan()
    {
        $model = new AdminKapal();
        $data['kapal'] = $model->getData()->getResultArray();
        echo view('/admin/report_kapal', $data);
    }
}
