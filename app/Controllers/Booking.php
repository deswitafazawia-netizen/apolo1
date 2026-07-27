<?php

namespace App\Controllers;

use App\Models\Photografermodel;
use App\Models\JenisphotographyModel;
use App\Models\Pemesananmodel;

class Booking extends BaseController
{
        public function index($idPhotografer, $idJenis)
        {
            $photograferModel = new \App\Models\PhotograferModel();
            $jenisModel       = new \App\Models\JenisPhotographyModel();

            $data['photografer'] = $photograferModel->find($idPhotografer);
            $data['paket']       = $jenisModel->find($idJenis);

            return view('pages/booking', $data);
        }

    public function simpan()
    {
        $model = new Pemesananmodel();

        $model->save([
            'id_pelanggan'         => session()->get('id_pelanggan'),
            'id_photografer'       => $this->request->getPost('id_photografer'),
            'id_jenis_photography' => $this->request->getPost('id_jenis_photography'),
            'tgl_pemesanan'        => date('Y-m-d H:i:s'),
            'tgl_acara'            => $this->request->getPost('tgl_acara'),
            'lokasi'               => $this->request->getPost('lokasi'),
            'no_penanggung_jawab'  => $this->request->getPost('no_penanggung_jawab'),
            'total_harga'          => $this->request->getPost('total_harga'),
            'id_status'            => 1
        ]);

        session()->setFlashdata('success','Booking berhasil dikirim.');

        return redirect()->to(base_url('dashboard/pemesanan'));
    }
}