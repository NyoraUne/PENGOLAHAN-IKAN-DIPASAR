<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_berita extends Model
{
    protected $table = 'tb_berita';
    protected $primaryKey = 'id_berita';
    protected $allowedFields = [
        'judul',
        'isi_berita',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
