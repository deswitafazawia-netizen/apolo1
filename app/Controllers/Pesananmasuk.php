<?php

namespace App\Controllers;

class Pesananmasuk extends BaseController
{
    public function index()
    {
        $model = new \App\Models\PemesananModel();

        $id_fotografer = session()->get('id_photografer');

        $data['pemesanan'] = $model
            ->select('pemesanan.*, pelanggan.nama_pelanggan, jenis_photography.nama_jenis')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->where('pemesanan.id_photografer', $id_fotografer)
            ->findAll();

        $data['total'] = $model->where('id_photografer', $id_fotografer)->countAllResults();
        $data['menunggu'] = $model->where(['id_photografer'=>$id_fotografer,'id_status'=>1])->countAllResults();
        $data['diterima'] = $model->where(['id_photografer'=>$id_fotografer,'id_status'=>2])->countAllResults();
        $data['selesai']  = $model->where(['id_photografer'=>$id_fotografer,'id_status'=>3])->countAllResults();

        return view('pages/pesananmasuk', $data);
    }

        public function terima($id)
            {
                $model = new \App\Models\PemesananModel();

                $model->update($id, [
                    'id_status' => 2
                ]);

                return redirect()->to(base_url('dashboard/pesananmasuk'))
                                ->with('success', 'Pesanan berhasil diterima.');
            }

            public function tolak($id)
            {
                $model = new \App\Models\PemesananModel();

                $model->update($id, [
                    'id_status' => 4 
                ]);

                return redirect()->to(base_url('dashboard/pesananmasuk'))
                                ->with('success', 'Pesanan berhasil ditolak.');
            }
}