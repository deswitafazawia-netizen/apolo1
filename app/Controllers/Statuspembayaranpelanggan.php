<?php
namespace App\Controllers;

class Statuspembayaranpelanggan extends BaseController
{
        public function index()
        {
            $model = new \App\Models\PemesananModel();

            $id_pelanggan = session()->get('id_pelanggan');

            $data['pembayaran'] = $model
                ->select('
                    pemesanan.*,
                    photografer.nama_photografer,
                    jenis_photography.nama_jenis
                ')
                ->join('photografer','photografer.id_photografer=pemesanan.id_photografer')
                ->join('jenis_photography','jenis_photography.id_jenis_photography=pemesanan.id_jenis_photography')
                ->where('pemesanan.id_pelanggan',$id_pelanggan)
                ->where('pemesanan.id_status',2) 
                ->findAll();

            return view('pages/statuspembayaranpelanggan',$data);
        }
}