<?php

namespace App\Models;

use CodeIgniter\Model;

class PengalamanModel extends Model
{
    protected $table            = 'pengalaman';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'biodata_id',
        'posisi',
        'institusi',
        'kategori',
        'tahun_mulai',
        'tahun_selesai',
        'deskripsi',
    ];

    protected $useTimestamps = false;
}
