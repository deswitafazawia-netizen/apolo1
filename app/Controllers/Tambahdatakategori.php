<?php

namespace App\Controllers;

use App\Models\KategoriModel;

class Tambahdatakategori extends BaseController
{
    public function index()
    {
        return view('pages/tambahdatakategori');
    }

    public function simpan()
    {
        $model = new KategoriModel();

        $model->save([
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'deskripsi'     => $this->request->getPost('deskripsi')
        ]);

        session()->setFlashdata(
            'success',
            'Kategori berhasil ditambahkan.'
        );

        return redirect()->to(base_url('dashboard/photography'));
    }
}