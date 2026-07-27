<?php

namespace App\Controllers;

use App\Models\Pemesananmodel;
use App\Models\Proyeklelangpelangganmodel;

class Laporan extends BaseController
{
    public function index()
    {
        $pemesananModel = new Pemesananmodel();
        $proyekModel = new Proyeklelangpelangganmodel();

        $bulan = $this->request->getGet('bulan');
        $kategori = $this->request->getGet('kategori') ?? 'semua';

        $builderPemesanan = $pemesananModel
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis,
                status.nama_status
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->join('status', 'status.id_status = pemesanan.id_status', 'left');

        if ($bulan) {
            $builderPemesanan->where('DATE_FORMAT(pemesanan.tgl_pemesanan, "%Y-%m")', $bulan);
        }

        $dataPemesanan = $builderPemesanan->findAll();

        $builderProyek = $proyekModel
            ->select('
                proyek_lelang.*,
                pelanggan.nama_pelanggan,
                status.nama_status
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = proyek_lelang.id_pelanggan', 'left')
            ->join('status', 'status.id_status = proyek_lelang.id_status', 'left');

        if ($bulan) {
            $builderProyek->where('DATE_FORMAT(proyek_lelang.tgl_dibuat, "%Y-%m")', $bulan);
        }

        $dataProyek = $builderProyek->findAll();

        $totalPemesanan = count($dataPemesanan);
        $totalProyek = count($dataProyek);
        $totalSemua = $totalPemesanan + $totalProyek;

        $pemesananSelesai = 0;
        $pemesananDiproses = 0;
        $pemesananDibatalkan = 0;
        foreach ($dataPemesanan as $p) {
            if ($p['id_status'] == 3) $pemesananSelesai++;
            if ($p['id_status'] == 2) $pemesananDiproses++;
            if ($p['id_status'] == 5) $pemesananDibatalkan++;
        }

        $proyekAktif = 0;
        $proyekSelesai = 0;
        foreach ($dataProyek as $pr) {
            if ($pr['id_status'] == 1) $proyekAktif++;
            if ($pr['id_status'] == 2) $proyekSelesai++;
        }

        $data = [
            'dataPemesanan'       => $dataPemesanan,
            'dataProyek'          => $dataProyek,
            'totalSemua'          => $totalSemua,
            'totalPemesanan'      => $totalPemesanan,
            'totalProyek'         => $totalProyek,
            'pemesananSelesai'    => $pemesananSelesai,
            'pemesananDiproses'   => $pemesananDiproses,
            'pemesananDibatalkan' => $pemesananDibatalkan,
            'proyekAktif'         => $proyekAktif,
            'proyekSelesai'       => $proyekSelesai,
            'kategori'            => $kategori,
            'bulan'               => $bulan,
        ];

        return view('pages/laporan', $data);
    }
}
