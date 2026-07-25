<?php

namespace App\Controllers;

use App\Models\Pemesananmodel;
use App\Models\Pembatalanmodel;
use App\Models\Dendamodel;

class Pemesanan extends BaseController
{
    public function index()
    {
        $model = new Pemesananmodel();
        $role = session()->get('role');

        $builder = $model
            ->select('
                pemesanan.*,
                pelanggan.nama_pelanggan,
                photografer.nama_photografer,
                jenis_photography.nama_jenis,
                pembatalan.alasan
            ')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->join('pembatalan', 'pembatalan.id_pemesanan = pemesanan.id_pemesanan', 'left');

        if ($role === 'admin') {
            $data['pemesanan'] = $builder->findAll();
        } elseif ($role === 'photografer') {
            $id = session()->get('id_photografer');
            $data['pemesanan'] = $builder
                ->where('pemesanan.id_photografer', $id)
                ->findAll();
        } elseif ($role === 'pelanggan') {
            $id = session()->get('id_pelanggan');
            $data['pemesanan'] = $builder
                ->where('pemesanan.id_pelanggan', $id)
                ->findAll();
        }

        $total = count($data['pemesanan']);
        $menunggu = 0;
        $diproses = 0;
        $selesai = 0;
        $ditolak = 0;
        $dibatalkan = 0;
        $menunggu_verifikasi = 0;
        foreach ($data['pemesanan'] as $p) {
            $s = $p['id_status'];
            if ($s == 1) $menunggu++;
            elseif ($s == 2) $diproses++;
            elseif ($s == 3) $selesai++;
            elseif ($s == 4) $ditolak++;
            elseif ($s == 5) $dibatalkan++;
            elseif ($s == 12) $menunggu_verifikasi++;
        }

        $data['role'] = $role;
        $data['total'] = $total;
        $data['menunggu'] = $menunggu;
        $data['diproses'] = $diproses;
        $data['selesai'] = $selesai;
        $data['ditolak'] = $ditolak;
        $data['dibatalkan'] = $dibatalkan;
        $data['menunggu_verifikasi'] = $menunggu_verifikasi;

        return view('pages/pemesanan', $data);
    }

    public function terima($id)
    {
        $model = new Pemesananmodel();
        $photograferModel = new \App\Models\PhotograferModel();
        $id_photografer = session()->get('id_photografer');

        if ($id_photografer) {
            $photografer = $photograferModel->find($id_photografer);
            if ($photografer && !empty($photografer['tgl_beku_hingga']) && strtotime($photografer['tgl_beku_hingga']) > time()) {
                return redirect()->back()->with('error', 'Akun Anda sedang dibekukan, tidak dapat menerima pesanan.');
            }
        }

        $model->update($id, ['id_status' => 2]);
        return redirect()->back()->with('success', 'Pesanan diterima.');
    }

    public function tolak($id)
    {
        $model = new Pemesananmodel();
        $pembatalanModel = new Pembatalanmodel();
        $role = session()->get('role');

        if (strtolower($this->request->getMethod()) === 'post') {
            $pemesanan = $model->find($id);
            $status_sebelumnya = $pemesanan['id_status'] ?? 1;

            $model->update($id, ['id_status' => 12]);

            $pembatalanModel->save([
                'id_pemesanan'      => $id,
                'pihak_pembatal'    => $role,
                'status_sebelumnya' => $status_sebelumnya,
                'alasan'            => $this->request->getPost('alasan'),
                'status_verifikasi' => 'menunggu',
                'tgl_pembatalan'    => date('Y-m-d H:i:s')
            ]);

            return redirect()->to(base_url('dashboard/pemesanan'))->with('success', 'Permohonan penolakan dikirim, menunggu verifikasi admin.');
        }

        $data['pemesanan'] = $model
            ->select('pemesanan.*, pelanggan.nama_pelanggan, photografer.nama_photografer, jenis_photography.nama_jenis')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->find($id);
        $data['aksi'] = 'tolak';
        return view('pages/form_alasan', $data);
    }

    public function batalkan($id)
    {
        $model = new Pemesananmodel();
        $pembatalanModel = new Pembatalanmodel();
        $role = session()->get('role');

        if (strtolower($this->request->getMethod()) === 'post') {
            $pemesanan = $model->find($id);
            $status_sebelumnya = $pemesanan['id_status'] ?? 1;

            $model->update($id, ['id_status' => 12]);

            $pembatalanModel->save([
                'id_pemesanan'      => $id,
                'pihak_pembatal'    => $role,
                'status_sebelumnya' => $status_sebelumnya,
                'alasan'            => $this->request->getPost('alasan'),
                'status_verifikasi' => 'menunggu',
                'tgl_pembatalan'    => date('Y-m-d H:i:s')
            ]);

            return redirect()->to(base_url('dashboard/pemesanan'))->with('success', 'Permohonan pembatalan dikirim, menunggu verifikasi admin.');
        }

        $data['pemesanan'] = $model
            ->select('pemesanan.*, pelanggan.nama_pelanggan, photografer.nama_photografer, jenis_photography.nama_jenis')
            ->join('pelanggan', 'pelanggan.id_pelanggan = pemesanan.id_pelanggan', 'left')
            ->join('photografer', 'photografer.id_photografer = pemesanan.id_photografer', 'left')
            ->join('jenis_photography', 'jenis_photography.id_jenis_photography = pemesanan.id_jenis_photography', 'left')
            ->find($id);
        $data['aksi'] = 'batalkan';
        return view('pages/form_alasan', $data);
    }

    public function verifikasiPembatalan($id)
    {
        $model = new Pemesananmodel();
        $pembatalanModel = new Pembatalanmodel();
        $dendaModel = new Dendamodel();
        $photograferModel = new \App\Models\PhotograferModel();

        $pemesanan = $model->find($id);
        if (!$pemesanan) {
            return redirect()->to(base_url('dashboard/pemesanan'))->with('error', 'Pemesanan tidak ditemukan.');
        }

        $pembatalan = $pembatalanModel->where('id_pemesanan', $id)->first();
        if (!$pembatalan || $pembatalan['status_verifikasi'] !== 'menunggu') {
            return redirect()->to(base_url('dashboard/pemesanan'))->with('error', 'Tidak ada permohonan pembatalan yang menunggu.');
        }

        $model->update($id, ['id_status' => 5]);
        $pembatalanModel->update($pembatalan['id_pembatalan'], ['status_verifikasi' => 'disetujui']);

        $tgl_acara = $pemesanan['tgl_acara'];
        $tgl_pembatalan = date('Y-m-d');
        $selisih_hari = floor((strtotime($tgl_acara) - strtotime($tgl_pembatalan)) / (60 * 60 * 24));

        if ($selisih_hari <= 3) {
            $pihak = $pembatalan['pihak_pembatal'];

            if ($pihak === 'pelanggan') {
                $db = \Config\Database::connect();
                $db->query("UPDATE pembayaran SET id_status = 4 WHERE id_pemesanan = ? AND id_status = 1", [$id]);

                $dendaModel->save([
                    'id_pemesanan'  => $id,
                    'id_pembatalan' => $pembatalan['id_pembatalan'],
                    'jenis_denda'   => 'dp_hangus',
                    'keterangan'    => 'DP hangus karena pelanggan membatalkan pesanan H-' . $selisih_hari,
                    'tgl_denda'     => date('Y-m-d H:i:s'),
                ]);
            } elseif ($pihak === 'photografer') {
                $tgl_beku = date('Y-m-d H:i:s', strtotime('+3 days'));
                $photograferModel->update($pemesanan['id_photografer'], [
                    'id_status' => 2,
                    'tgl_beku_hingga' => $tgl_beku
                ]);

                $dendaModel->save([
                    'id_pemesanan'  => $id,
                    'id_pembatalan' => $pembatalan['id_pembatalan'],
                    'jenis_denda'   => 'akun_dibekukan',
                    'keterangan'    => 'Akun dibekukan 3 hari karena photografer membatalkan pesanan H-' . $selisih_hari,
                    'tgl_denda'     => date('Y-m-d H:i:s'),
                ]);
            }
        }

        return redirect()->to(base_url('dashboard/pemesanan'))->with('success', 'Pembatalan disetujui' . ($selisih_hari <= 3 ? ' dan denda telah diterapkan.' : '.'));
    }

    public function tolakVerifikasiPembatalan($id)
    {
        $model = new Pemesananmodel();
        $pembatalanModel = new Pembatalanmodel();

        $pemesanan = $model->find($id);
        if (!$pemesanan) {
            return redirect()->to(base_url('dashboard/pemesanan'))->with('error', 'Pemesanan tidak ditemukan.');
        }

        $pembatalan = $pembatalanModel->where('id_pemesanan', $id)->first();
        if (!$pembatalan || $pembatalan['status_verifikasi'] !== 'menunggu') {
            return redirect()->to(base_url('dashboard/pemesanan'))->with('error', 'Tidak ada permohonan pembatalan yang menunggu.');
        }

        $model->update($id, ['id_status' => $pembatalan['status_sebelumnya']]);
        $pembatalanModel->update($pembatalan['id_pembatalan'], ['status_verifikasi' => 'ditolak']);

        return redirect()->to(base_url('dashboard/pemesanan'))->with('success', 'Permohonan pembatalan ditolak.');
    }
}
