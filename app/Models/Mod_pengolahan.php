<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_pengolahan extends Model
{
    protected $table = 'tb_pengolahan_ikan';
    protected $primaryKey = 'id_pengolahan_ikan';
    protected $allowedFields = [
        'id_ikan',
        'tanggal_olah',
        'jenis_olah',
        'jumlah_olah',
        'durasi_olah',
        'catatan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = '';
}
