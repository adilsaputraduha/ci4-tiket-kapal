<?php

namespace App\Controllers;

use App\Models\AdminPenumpang;

class AdminPenumpangController extends BaseController
{
    public function index()
    {
        $model = new AdminPenumpang();
        $data = [
            'penumpang' => $model->getData()->getResultArray(),
            'validation' => \Config\Services::validation()
        ];
        echo view('/admin/view_penumpang', $data);
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
            'alamat' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                    'max_length' => 'Kolom alamat tidak boleh lebih dari 100 karakter'
                ]
            ],
            'nohp' => [
                'rules' => 'required|min_length[8]|max_length[25]',
                'errors' => [
                    'required' => 'No. Hp harus diisi',
                    'max_length' => 'Kolom no. hp tidak boleh lebih dari 100 karakter',
                    'min_length' => 'Kolom no. hp setidaknya terdiri dari 4 karakter'
                ]
            ],
            'jenkel' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus diisi'
                ]
            ]
        ];

        if ($this->validate($rules)) {
            $model = new AdminPenumpang();
            $data = array(
                'penumpangNama' => $this->request->getPost('nama'),
                'penumpangAlamat' => $this->request->getPost('alamat'),
                'penumpangNoHp' => $this->request->getPost('nohp'),
                'penumpangJenkel' => $this->request->getPost('jenkel'),
                'penumpangUserId' => 0,
                'penumpangUpdatedAt' => date('Y-m-d H:i:s'),
                'penumpangCreatedAt' => date('Y-m-d H:i:s')
            );
            $model->saveData($data);
            session()->setFlashdata('success', 'Berhasil menyimpan data');
            return redirect()->to('/admin/penumpang');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/penumpang')->withInput()->with('validation', $validation);
        }
    }

    public function edit()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'max_length' => 'Kolom nama tidak boleh lebih dari 100 karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'max_length' => 'Kolom password tidak boleh lebih dari 100 karakter',
                    'min_length' => 'Kolom password setidaknya terdiri dari 4 karakter'
                ]
            ],
            'level' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level harus diisi'
                ]
            ]
        ];

        $id = $this->request->getPost('id');

        if ($this->validate($rules)) {
            $model = new AdminPenumpang();
            $data = array(
                'userEmail' => $this->request->getPost('email'),
                'userNama' => $this->request->getPost('nama'),
                'userPassword' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
                'userRole' => $this->request->getPost('level')
            );
            $model->updateUser($data, $id);
            session()->setFlashdata('success', 'Berhasil edit data');
            return redirect()->to('/admin/user');
        } else {
            session()->setFlashdata('failed', 'Gagal menyimpan, ada kesalahan pada inputan anda' . $this->validator->listErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/admin/user')->withInput()->with('validation', $validation);
        }
    }

    public function delete()
    {
        $model = new AdminPenumpang();
        $id = $this->request->getPost('id');
        $model->deleteUser($id);
        session()->setFlashdata('success', 'Berhasil menghapus data');
        return redirect()->to('/admin/user');
    }

    public function laporan()
    {
        $model = new AdminPenumpang();
        $data['penumpang'] = $model->getData()->getResultArray();
        echo view('/admin/report_penumpang', $data);
    }
}
