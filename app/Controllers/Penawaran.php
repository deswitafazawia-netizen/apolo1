<?php

namespace App\Controllers;

use App\Models\Penawaranlelangmodel;

class Penawaran extends BaseController
{
        public function index($id_proyek)
        {
            $model = new \App\Models\Penawaranlelangmodel();

            $data['id_proyek'] = $id_proyek;

            $data['penawaran'] = $model
                ->select('penawaran_lelang.*, photografer.nama_photografer')
                ->join(
                    'photografer',
                    'photografer.id_photografer = penawaran_lelang.id_photografer'
                )
                ->where('penawaran_lelang.id_proyek', $id_proyek)
                ->findAll();

            return view('pages/penawaran', $data);
        }

    public function simpan()
    {
        $model = new Penawaranlelangmodel();

        $model->save([
            'id_proyek'           => $this->request->getPost('id_proyek'),
            'id_photografer'      => session()->get('id_photografer'),
            'harga_penawaran'     => $this->request->getPost('harga_penawaran'),
            'deskripsi_penawaran' => $this->request->getPost('deskripsi_penawaran'),
            'id_status'           => 1,
            'tgl_penawaran'       => date('Y-m-d H:i:s')
        ]);

        session()->setFlashdata('success', 'Penawaran berhasil dikirim!');

        return redirect()->to(base_url('dashboard/proyeklelangphotografer'));
    }

    public function penawaranPelanggan($id_proyek)
        {
            $model = new \App\Models\Penawaranlelangmodel();

            $data['penawaran'] = $model
                ->select('
                    penawaran_lelang.*,
                    photografer.nama_photografer
                ')
                ->join(
                    'photografer',
                    'photografer.id_photografer = penawaran_lelang.id_photografer'
                )
                ->where('penawaran_lelang.id_proyek', $id_proyek)
                ->findAll();

            $data['id_proyek'] = $id_proyek;

            return view('pages/penawaranpelanggan',$data);
        }

                public function pilihPhotografer($id_penawaran)
        {
            $penawaranModel = new \App\Models\PenawaranlelangModel();
            $proyekModel = new \App\Models\ProyeklelangpelangganModel();
            $pemesananModel = new \App\Models\PemesananModel();

            $penawaran = $penawaranModel->find($id_penawaran);

            if (!$penawaran) {
                return redirect()->back();
            }
            $penawaranModel->update($id_penawaran, [
                'id_status' => 2
            ]);
            $penawaranModel
                ->where('id_proyek', $penawaran['id_proyek'])
                ->where('id_penawaran !=', $id_penawaran)
                ->set(['id_status'=>3])
                ->update();

            $proyekModel->update($penawaran['id_proyek'],[
                'id_status'=>2
            ]);

            $proyek = $proyekModel->find($penawaran['id_proyek']);

        if (!$pemesananModel->insert([
            'id_pelanggan'          => $proyek['id_pelanggan'],
            'id_photografer'        => $penawaran['id_photografer'],
            'id_jenis_photography'  => $proyek['id_jenis_photography'],
            'tgl_pemesanan'         => date('Y-m-d'),
            'tgl_acara'             => $proyek['tgl_acara'],
            'lokasi'                => $proyek['lokasi'],
            'total_harga'           => $penawaran['harga_penawaran'],
            'id_status'             => 1
        ])) {
            dd($pemesananModel->errors());
        }

            return redirect()->to(base_url('dashboard/proyeklelangpelanggan'))
                            ->with('success','Photografer berhasil dipilih.');
        }
}