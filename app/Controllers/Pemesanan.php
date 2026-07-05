<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Pemesanan extends BaseController
{
    public function index()
    {
        $model = new Pemesananmodel();

        $data['pemesanan'] = $model
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography')
            ->where('pemesanan.id_pelanggan', session()->get('id_pelanggan'))
            ->findAll();

        return view('pages/pemesanan', $data);
    }

    public function terima($id)
        {
            $model = new \App\Models\PemesananModel();

            $model->update($id, [
                'id_status' => 2
            ]);

            return redirect()->back();
        }

    public function tolak($id)
        {
            $model = new \App\Models\PemesananModel();

            $model->update($id, [
                'id_status' => 3
            ]);

            return redirect()->back();
        }
}