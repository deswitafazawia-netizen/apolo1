<?php

namespace App\Models;

use CodeIgniter\Model;

class Pembayaranmodel extends Model
{
    protected $table = 'pembayaran';
    protected $primaryKey = 'id_pembayaran';

    protected $allowedFields = [
        'id_pemesanan',
        'jenis_pembayaran',
        'jumlah_bayar',
        'bukti_pembayaran',
        'id_status',
        'tgl_pembayaran'
    ];

    protected $returnType = 'array';
}
