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
            $model = new AdminRute();
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
            $model = new AdminRute();
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
        $model = new AdminRute();
        $id = $this->request->getPost('id');
        $model->deleteData($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/rute');
    }

    public function laporan()
    {
        $model = new AdminRute();
        $data['rute'] = $model->getData()->getResultArray();
        echo view('/admin/report_rute', $data);
    }
}
