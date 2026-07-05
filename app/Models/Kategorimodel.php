<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori_photography';

    protected $primaryKey = 'id_kategori';

    protected $allowedFields = [
        'nama_kategori',
        'deskripsi'
    ];

    protected $returnType = 'array';
}