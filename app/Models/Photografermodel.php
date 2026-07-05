<?php

namespace App\Models;

use CodeIgniter\Model;

class PhotograferModel extends Model
{
    protected $table = 'photografer';
    protected $primaryKey = 'id_photografer';

    protected $allowedFields = [
        'nama_photografer',
        'email',
        'no_hp',
        'alamat',
        'password',
        'id_status'
    ];

    protected $useTimestamps = false;
    protected $returnType = 'array';

    public function GetPortofolio(){
        return $this->select('photografer.*, portofolio.foto, portofolio.deskripsi, rating.nilai_rating')
        ->join('portofolio', 'portofolio.id_photografer = photografer.id_photografer')
        ->join('rating','rating.id_photografer = photografer.id_photografer')
        ->findAll();
    }
}