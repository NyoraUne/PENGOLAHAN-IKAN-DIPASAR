<?php

namespace App\Models;

use CodeIgniter\Model;

class Mod_tangkap_ikan extends Model
{
    protected $table = 'tb_perikanan_tangkap';
    protected $primaryKey = 'id_perikanan_tangkap';
    protected $allowedFields = [
        'jenis_perairan',
        'tanggal',
        'lokasi',
        'jenis_kapal',
        'alat_tangkap',
        'id_user',
        'jumlah_tangkap',
        'keterangan',
    ];
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = '';
    protected $deletedField  = '';
}
