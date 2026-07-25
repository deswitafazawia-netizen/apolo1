<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PhotograferModel;

class Tabelphotografer extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();
        $photograferModel = new PhotograferModel();


        $data['photografer'] = $photograferModel->findAll();

        $data['totalPelanggan'] = $pelangganModel->countAll();
        $data['totalPhotografer'] = $photograferModel->countAll();
        $data['totalPengguna'] = $data['totalPelanggan'] + $data['totalPhotografer'];

        $data['akunAktif'] =
            $pelangganModel->where('id_status', 1)->countAllResults()
            +
            $photograferModel->where('id_status', 1)->countAllResults();

        return view('pages/tabelphotografer', $data);
    }

    public function detail($id)
    {
        $model = new PhotograferModel();

        $data['photografer'] = $model->find($id);

        return view('pages/detailphotografer', $data);
    }

    public function edit($id)
    {
        $model = new PhotograferModel();

        $data['photografer'] = $model->find($id);

        return view('pages/editphotografer', $data);
    }

    public function update($id)
    {
        $model = new PhotograferModel();

        $model->update($id, [
            'nama_photografer' => $this->request->getPost('nama_photografer'),
            'email'            => $this->request->getPost('email'),
            'no_hp'            => $this->request->getPost('no_hp'),
            'alamat'           => $this->request->getPost('alamat'),
            'id_status'        => $this->request->getPost('id_status'),
        ]);

        return redirect()->to(base_url('dashboard/tabelphotografer'))
                        ->with('success', 'Data berhasil diperbarui');
    }

    public function hapus($id)
    {
        $model = new PhotograferModel();

        $model->delete($id);

        return redirect()->to(base_url('dashboard/tabelphotografer'))
                        ->with('success', 'Data photografer berhasil dihapus.');
    }
}