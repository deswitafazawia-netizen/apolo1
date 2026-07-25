<?php

namespace App\Models;

use CodeIgniter\Model;

class Dendamodel extends Model
{
    protected $table            = 'denda';
    protected $primaryKey       = 'id_denda';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $allowedFields    = [
        'id_pemesanan',
        'id_pembatalan',
        'jenis_denda',
        'keterangan',
        'tgl_denda',
    ];
}
