<?php

namespace App\Controllers;

use App\Models\PhotograferModel;

class Tambahdataphotografer extends BaseController
{
    public function index()
    {
        return view('pages/tambahdataphotografer');
    }

    public function simpan()
    {
        $model = new PhotograferModel();

        $model->save([

            'nama_photografer' => $this->request->getPost('nama_photografer'),

            'email' => $this->request->getPost('email'),

            'no_hp' => $this->request->getPost('no_hp'),

            'alamat' => $this->request->getPost('alamat'),

            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),

            'id_status' => $this->request->getPost('id_status')

        ]);

        session()->setFlashdata(
            'success',
            'Data photografer berhasil ditambahkan.'
        );

        return redirect()->to(
            base_url('dashboard/tabelphotografer')
        );
    }
}