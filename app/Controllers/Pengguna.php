<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PhotograferModel;

class Pengguna extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $photograferModel = new PhotograferModel();

        $data['pelanggan'] = $pelangganModel->findAll();
        $data['totalPelanggan'] = $pelangganModel->countAll();
        $data['totalPhotografer'] = $photograferModel->countAll();
        $data['totalPengguna'] = $data['totalPelanggan'] + $data['totalPhotografer'];

        $data['akunAktif'] =
            $pelangganModel->where('id_status', 1)->countAllResults()
            +
            $photograferModel->where('id_status', 1)->countAllResults();

        return view('pages/pengguna', $data);
    }

    public function edit($id)
    {
        $model = new PelangganModel();

        $data['pelanggan'] = $model->find($id);

        return view('pages/editpelanggan', $data);
    }

    public function update($id)
    {
        $model = new PelangganModel();

        $model->update($id, [
            'nama_pelanggan' => $this->request->getPost('nama_pelanggan'),
            'email'          => $this->request->getPost('email'),
            'no_hp'          => $this->request->getPost('no_hp'),
            'password'       => $this->request->getPost('password'),
            'id_status'      => $this->request->getPost('id_status'),
        ]);

        return redirect()->to(base_url('dashboard/pengguna'))
                         ->with('success','Data berhasil diubah');
    }

    public function hapus($id)
    {
        $model = new PelangganModel();

        $model->delete($id);

        return redirect()->to(base_url('dashboard/pengguna'))
                         ->with('success','Data berhasil dihapus');
    }
}