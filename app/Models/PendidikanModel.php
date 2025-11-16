<?php

namespace App\Models;

use CodeIgniter\Model;

class PendidikanModel extends Model
{
    protected $table            = 'pendidikan';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'biodata_id',
        'jenjang',
        'nama_institusi',
        'jurusan',
        'tahun_mulai',
        'tahun_selesai',
    ];

    protected $useTimestamps = false;
}
