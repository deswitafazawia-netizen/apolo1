<?php

namespace App\Models;

use CodeIgniter\Model;

class JenisPhotographyModel extends Model
{
    protected $table = 'jenis_photography';
    protected $primaryKey = 'id_jenis_photography';

    protected $allowedFields = [
        'id_photografer',
        'id_kategori',
        'nama_jenis',
        'harga',
        'deskripsi',
        'foto'
    ];

    protected $returnType = 'array';

    public function GetPortofolio($id)
    {
        return $this->where('id_photografer', $id)
                    ->findAll();
    }
}