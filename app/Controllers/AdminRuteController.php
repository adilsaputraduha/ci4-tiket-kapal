<?php

namespace App\Controllers;

use App\Models\AdminRute;

class AdminRuteController extends BaseController
{
    public function index()
    {
        $model = new AdminRute();
        $data = [
            'rute' => $model->getData()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_rute', $data);
    }

    public function save()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 20 karakter'
                ]
            ],
            'fasilitas' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Fasilitas harus diisi',
                    'max_length' => 'Kolom fasilitas tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminRute();
            $data = array(
                'kategoriNama' => $this->request->getPost('nama'),
                'kategoriFasilitas' => $this->request->getPost('fasilitas'),
                'kategoriUpdatedAt' => date('Y-m-d H:i:s'),
                'kategoriCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveData($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/kategori');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/kategori')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 20 karakter'
                ]
            ],
            'fasilitas' => [
                'rules' => 'required|max_length[255]',
                'errors' => [
                    'required' => 'Fasilitas harus diisi',
                    'max_length' => 'Kolom fasilitas tidak boleh lebih dari 255 karakter'
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminRute();
            $data = array(
                'kategoriNama' => $this->request->getPost('nama'),
                'kategoriFasilitas' => $this->request->getPost('fasilitas'),
                'kategoriUpdatedAt' => date('Y-m-d H:i:s'),
            );
            $model->updateData($data, $id);
            session()->setFlashdata('success', 'Berhasil edit data');
            return redirect()->to('/admin/kategori');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/kategori')->withInput()->with('validation', $validation);
        }
    }

    public function delete()
    {
        $model = new AdminRute();
        $id = $this->request->getPost('id');
        $model->deleteData($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/kategori');
    }

    public function laporan()
    {
        $model = new AdminRute();
        $data['kategori'] = $model->getData()->getResultArray();
        echo view('/admin/report_kategori', $data);
    }
}
