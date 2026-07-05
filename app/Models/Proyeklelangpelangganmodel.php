<?php

namespace App\Models;

use CodeIgniter\Model;

class ProyeklelangpelangganModel extends Model
{
    protected $table = 'proyek_lelang';
    protected $primaryKey = 'id_proyek';

    protected $allowedFields = [
        'id_pelanggan',
        'judul_proyek',
        'tgl_acara',
        'lokasi',
        'budget',
        'deadline_penawaran',
        'deskripsi',
        'lampiran',
        'id_status',
        'tgl_dibuat'
    ];

    protected $returnType = 'array';
}