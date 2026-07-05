<?php

namespace App\Controllers;

use App\Models\PemesananModel;

class Bayar extends BaseController
{
    public function index($id)
    {
        $model = new PemesananModel();

        $data['pemesanan'] = $model
            ->select('
                pemesanan.*,
                photografer.nama_photografer,
                jenis_photography.nama_jenis
            ')
            ->join('photografer','photografer.id_photografer=pemesanan.id_photografer')
            ->join('jenis_photography','jenis_photography.id_jenis_photography=pemesanan.id_jenis_photography')
            ->find($id);

        return view('pages/bayar',$data);
    }
}