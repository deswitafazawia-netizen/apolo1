<?php

namespace App\Models;

use CodeIgniter\Model;

class Pemesananmodel extends Model
{
    protected $table = 'pemesanan';
    protected $primaryKey = 'id_pemesanan';

    protected $allowedFields = [
        'id_pelanggan',
        'id_photografer',
        'id_jenis_photography',
        'tgl_pemesanan',
        'tgl_acara',
        'lokasi',
        'total_harga',
        'id_status'
    ];

    protected $returnType = 'array';
}