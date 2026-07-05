<?php

namespace App\Controllers;

use App\Models\ProyeklelangpelangganModel;
use App\Models\PelangganModel;

class Tambahdataproyeklelang extends BaseController
{
    public function index()
    {
        $pelangganModel = new PelangganModel();

        $data['pelanggan'] = $pelangganModel->findAll();

        return view('pages/tambahdataproyeklelang', $data);
    }

        public function simpan()
        {
            $model = new ProyeklelangpelangganModel();

            $model->save([

                'id_pelanggan' => $this->request->getPost('id_pelanggan'),

                'judul_proyek' => $this->request->getPost('judul_proyek'),

                'tgl_acara' => $this->request->getPost('tgl_acara'),

                'lokasi' => $this->request->getPost('lokasi'),

                'budget' => $this->request->getPost('budget'),

                'deadline_penawaran' => $this->request->getPost('deadline_penawaran'),

                'deskripsi' => $this->request->getPost('deskripsi'),

                'lampiran' => null,

                'id_status' => $this->request->getPost('id_status'),

                'tgl_dibuat' => date('Y-m-d H:i:s')

            ]);

            session()->setFlashdata(
                'success',
                'Proyek lelang berhasil ditambahkan.'
            );

            return redirect()->to(
                base_url('dashboard/proyeklelangadmin')
            );
        }
}