<?php

namespace App\Models;

use CodeIgniter\Model;

class BiodataModel extends Model
{
    protected $table            = 'biodata';
    protected $primaryKey       = 'id';
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;

    protected $allowedFields    = [
        'nama_lengkap',
        'posisi',
        'email',
        'no_hp',
        'alamat',
        'ringkasan',
        'foto',
    ];

    protected $useTimestamps = false;
}
