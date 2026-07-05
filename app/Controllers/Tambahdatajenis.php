<?php

namespace App\Controllers;

use App\Models\JenisPhotographyModel;
use App\Models\KategoriModel;
use App\Models\PhotograferModel;

class Tambahdatajenis extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $photograferModel = new PhotograferModel();

        $data['kategori'] = $kategoriModel->findAll();
        $data['photografer'] = $photograferModel->findAll();

        return view('pages/tambahdatajenis', $data);
    }

    public function simpan()
    {
        $model = new JenisPhotographyModel();

        $harga = str_replace(['.', ','], '', $this->request->getPost('harga'));

        $model->save([

            'id_photografer' => $this->request->getPost('id_photografer'),

            'id_kategori' => $this->request->getPost('id_kategori'),

            'nama_jenis' => $this->request->getPost('nama_jenis'),

            'harga' => $harga,

            'deskripsi' => $this->request->getPost('deskripsi')

        ]);

        session()->setFlashdata(
            'success',
            'Jenis photography berhasil ditambahkan.'
        );

        return redirect()->to(base_url('dashboard/photography'));
    }
}