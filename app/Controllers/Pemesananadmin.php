<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesananadmin extends BaseController
{
    public function index()
    {
        $model = new PemesananModel();

        $data['pemesanan'] = $model
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->findAll();

        $data['total'] = $model->countAllResults(false);

        $data['menunggu'] = $model
            ->where('id_status', 1)
            ->countAllResults(false);

        $data['diproses'] = $model
            ->where('id_status', 2)
            ->countAllResults(false);

        $data['selesai'] = $model
            ->where('id_status', 3)
            ->countAllResults(false);

        return view('pages/pemesananadmin', $data);
    }
}