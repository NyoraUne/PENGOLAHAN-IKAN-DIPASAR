<?php

namespace App\Controllers;

use App\Models\Mod_hargaikan;
use App\Models\Mod_detail_harga;

class User_pasar extends BaseController
{
    protected $session;
    protected $Mod_hargaikan;
    protected $Mod_detail_harga;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_hargaikan = new Mod_hargaikan();
        $this->Mod_detail_harga = new Mod_detail_harga();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // $berita = $this->Mod_berita->paginate(2);
        $pasar = $this->Mod_hargaikan
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_harga_ikan.id_pasar')
            ->findAll();
        $pasar1 = $this->Mod_hargaikan
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_harga_ikan.id_pasar')
            ->findAll();

        $today = date('Y-m-d');
        // dd($today);

        $var2 = $this->Mod_detail_harga
            ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
            ->where('created_at', $today) // Add the condition to filter data for today
            ->findAll();
        // $pager = $this->Mod_berita->pager();
        $data = [
            'pasar' => $pasar,
            'pasar1' => $pasar1,
            'var' => $var2,
        ];

        return view('user/hargaikan', $data);
    }
    function cari()
    {
        $var = $this->request->getPost();
        $today = date('Y-m-d');

        $pasar1 = $this->Mod_hargaikan
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_harga_ikan.id_pasar')
            ->where('tb_harga_ikan.id_pasar', $var['id_pasar'])
            ->first();
        $detailharga = $this->Mod_detail_harga
            ->join('tb_ikan', 'tb_ikan.id_ikan = detail_harga.id_ikan')
            ->where('id_harga_ikan', $pasar1['id_harga_ikan'])
            ->where('created_at', $today) // Add the condition to filter data for today

            ->findAll();

        // dd($pasar1);
        $data = [
            'harga' => $pasar1,
            'detailharga' => $detailharga,
        ];
        return view('user/pasar', $data);
    }
}
