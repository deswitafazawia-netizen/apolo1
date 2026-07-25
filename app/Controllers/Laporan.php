<?php

namespace App\Controllers;

use App\Models\PelangganModel;
use App\Models\PhotograferModel;
use App\Models\Pemesananmodel;
use App\Models\Proyeklelangpelangganmodel;

class Laporan extends BaseController
{
    public function index()
    {
        $pelangganModel   = new \App\Models\PelangganModel();
        $photograferModel = new \App\Models\PhotograferModel();
        $pemesananModel   = new \App\Models\Pemesananmodel();

        $data['totalPelanggan']   = $pelangganModel->countAll();
        $data['totalPhotografer'] = $photograferModel->countAll();
        $data['total']            = $pemesananModel->countAll();

        $data['laporan'] = $pemesananModel
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis,
                status.nama_status
            ')
            ->join('pelanggan','pelanggan.id_pelanggan=pemesanan.id_pelanggan')
            ->join('photografer','photografer.id_photografer=pemesanan.id_photografer')
            ->join('jenis_photography','jenis_photography.id_jenis_photography=pemesanan.id_jenis_photography')
            ->join('status','status.id_status=pemesanan.id_status')
            ->findAll();

        return view('pages/laporan',$data);
    }

    public function proyek()
        {
            $pelangganModel   = new \App\Models\PelangganModel();
            $photograferModel = new \App\Models\PhotograferModel();
            $proyekModel      = new \App\Models\Proyeklelangpelangganmodel();

            $data['totalPelanggan']   = $pelangganModel->countAll();
            $data['totalPhotografer'] = $photograferModel->countAll();
            $data['total']            = $proyekModel->countAll();

            $data['laporanProyek'] = $proyekModel
                ->select('
                    proyek_lelang.*,
                    pelanggan.nama_pelanggan,
                    status.nama_status
                ')
                ->join('pelanggan','pelanggan.id_pelanggan=proyek_lelang.id_pelanggan')
                ->join('status','status.id_status=proyek_lelang.id_status')
                ->findAll();

            return view('pages/laporanproyek',$data);
        }
}