<?php

namespace App\Models;

use CodeIgniter\Model;

class perpusModel extends Model
{
    protected $table = 'perpus';
    protected $allowedFields = ['nama_anggota', 'kode_anggota', 'tanggal_lahir', 'tempat_lahir'];
}
