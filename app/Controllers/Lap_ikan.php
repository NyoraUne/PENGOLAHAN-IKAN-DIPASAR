<?php

namespace App\Controllers;

use App\Models\Mod_ikan;

class Lap_ikan extends BaseController


{
    protected $session;
    protected $Mod_ikan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/Auth/login');
        }

        //cek role dari session
        if ($this->session->get('hak_akses') != 1) {
            return redirect()->to('/user');
        }
        $data = [
            'title' => 'Nama',
            'type' => 'Laporan Ikan',
            'head' => 'Data Laporan Ikan',
        ];

        return view('admin/Laporan/ikan/index', $data);
    }
    function filter()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $ikan = $this->Mod_ikan->orderBy('created_at_ikan', 'desc')->findAll();
            $msg = '';
        } else if (empty($tgl1)) {
            $ikan = $this->Mod_ikan
                ->where('created_at_ikan <=', $tgl2)
                ->orderBy('created_at_ikan', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $ikan = $this->Mod_ikan
                ->where('created_at_ikan >=', $tgl1)
                ->orderBy('created_at_ikan', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $ikan = $this->Mod_ikan
                ->where('created_at_ikan >=', $tgl1)
                ->where('created_at_ikan <=', $tgl2)
                ->orderBy('created_at_ikan', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'ikan' => $ikan,
            'msg' => $msg,
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        return view('admin/Laporan/ikan/cetak', $data);
    }
}
