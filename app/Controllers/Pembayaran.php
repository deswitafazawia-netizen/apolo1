<?php

namespace App\Controllers;

use App\Models\Pembayaranmodel;

class Pembayaran extends BaseController
{
    public function index()
    {
        $model = new Pembayaranmodel();
        $role = session()->get('role');

        $builder = $model
            ->select('
                pembayaran.*,
                pemesanan.tgl_pemesanan,
                pemesanan.tgl_acara,
                pemesanan.lokasi,
                pemesanan.total_harga,
                pemesanan.id_status as status_pemesanan,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis,
                status.nama_status
            ')
            ->join('pemesanan', 'pemesanan.id_pemesanan = pembayaran.id_pemesanan')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->join('status', 'status.id_status = pembayaran.id_status', 'left');

        if ($role === 'admin') {
            $data['pembayaran'] = $builder->findAll();
        } elseif ($role === 'photografer') {
            $id = session()->get('id_photografer');
            $data['pembayaran'] = $builder
                ->where('pemesanan.id_photografer', $id)
                ->findAll();
        } elseif ($role === 'pelanggan') {
            $id = session()->get('id_pelanggan');
            $data['pembayaran'] = $builder
                ->where('pemesanan.id_pelanggan', $id)
                ->findAll();
        }

        $data['role'] = $role;

        return view('pages/pembayaran', $data);
    }
}
