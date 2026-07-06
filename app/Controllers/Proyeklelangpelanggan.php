<?php

namespace App\Controllers;

use App\Models\ProyeklelangpelangganModel;

class Proyeklelangpelanggan extends BaseController
{
    public function index()
    {
        $model = new ProyeklelangpelangganModel();

        $data['proyek'] = $model->findAll();

        return view('pages/proyeklelangpelanggan', $data);
    }

    public function simpan()
    {
        $model = new ProyeklelangpelangganModel();

        $file = $this->request->getFile('lampiran');
        $namaFile = null;

        if ($file && $file->isValid() && !$file->hasMoved()) {
            $namaFile = $file->getRandomName();
            $file->move(ROOTPATH . 'public/uploads/proyek', $namaFile);
        }

        $model->save([
            'id_pelanggan'       => session()->get('id_pelanggan'),
            'judul_proyek'       => $this->request->getPost('judul_proyek'),
            'tgl_acara'          => $this->request->getPost('tgl_acara'),
            'lokasi'             => $this->request->getPost('lokasi'),
            'budget'             => $this->request->getPost('budget'),
            'deadline_penawaran' => $this->request->getPost('deadline_penawaran'),
            'deskripsi'          => $this->request->getPost('deskripsi'),
            'lampiran'           => $namaFile,
            'id_status'          => 1,
            'tgl_dibuat'         => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(base_url('dashboard/proyeklelang'));
    }

        public function tutup($id)
        {
            $model = new \App\Models\ProyeklelangpelangganModel();

            $model->update($id, [
                'id_status' => 8
            ]);

            return redirect()->to(base_url('dashboard/proyeklelang'))
                            ->with('success', 'Proyek berhasil ditutup.');
        }

    
}