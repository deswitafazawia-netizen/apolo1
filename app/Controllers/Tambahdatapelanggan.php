<?php

namespace App\Controllers;

use App\Models\PelangganModel;

class Tambahdatapelanggan extends BaseController
{
    public function index()
    {
        return view('pages/tambahdatapelanggan');
    }

    public function simpan()
    {
        $model = new PelangganModel();

        $model->save([

            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),

            'email' => $this->request->getPost('email'),

            'no_hp' => $this->request->getPost('no_hp'),

            'username' => $this->request->getPost('username'),

            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),

            'id_status' => $this->request->getPost('id_status')

        ]);

        session()->setFlashdata(
            'success',
            'Data pelanggan berhasil ditambahkan.'
        );

        return redirect()->to(base_url('dashboard/pengguna'));
    }
}