<?php

namespace App\Models;

use CodeIgniter\Model;

class Penawaranlelangmodel extends Model
{
    protected $table = 'penawaran_lelang';
    protected $primaryKey = 'id_penawaran';

    protected $allowedFields = [
        'id_proyek',
        'id_photografer',
        'harga_penawaran',
        'deskripsi_penawaran',
        'id_status',
        'tgl_penawaran'
    ];

    protected $returnType = 'array';
}