<?php

namespace App\Models;

use CodeIgniter\Model;

class Portofoliomodel extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'id_portofolio';

    protected $allowedFields = [
        'id_photografer',
        'id_jenis_photography',
        'deskripsi',
        'foto',
        'harga',
        'tgl_upload'
    ];

    protected $useTimestamps = false;
    protected $returnType = 'array';

    public function GetPortofolio($id)
    {
        return $this->select('
            portofolio.*,
            jenis_photography.nama_jenis,
            jenis_photography.harga AS harga_jenis,
            jenis_photography.deskripsi AS deskripsi_jenis,
            kategori_photography.nama_kategori
        ')
            ->join(
                'jenis_photography',
                'portofolio.id_jenis_photography = jenis_photography.id_jenis_photography'
            )
            ->join(
                'kategori_photography',
                'jenis_photography.id_kategori = kategori_photography.id_kategori'
            )
            ->where('portofolio.id_photografer', $id)
            ->findAll();
    }
}
