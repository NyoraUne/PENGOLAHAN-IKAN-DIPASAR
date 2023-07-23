<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pembesaran extends Model
{
    protected $table = 'tb_pembesaran';
    protected $primaryKey = 'id_pembesaran';
    protected $allowedFields = [
        'id_ikan',
        'tgl_mulai',
        'tgl_selesai',
        'lokasi',
        'suhu_air',
        'jumlah_pakan',
        'kondisi_kesehatan',
        'keterangan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
