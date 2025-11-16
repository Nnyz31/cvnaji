<?php

namespace App\Models;

use CodeIgniter\Model;

class PortofolioModel extends Model
{
    protected $table            = 'portofolio';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'biodata_id',
        'judul',
        'deskripsi',
        'link_project',
        'gambar_preview',
        'tahun',
    ];

    protected $useTimestamps = false;
}
