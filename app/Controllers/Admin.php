<?php

namespace App\Controllers;

use App\Models\Mod_user;
use App\Models\Mod_ikan;
use App\Models\Mod_penjual;
use App\Models\Mod_pasar;
use App\Models\Mod_pembenihan;
use App\Models\Mod_hargaikan;
use App\Models\Mod_pembesaran;
use App\Models\Mod_tangkap_ikan;
use App\Models\Mod_transaksi_ikan;
use App\Models\Mod_berita;
use App\Models\Mod_pengolahan;

class Admin extends BaseController
{
    protected $session;
    protected $Mod_user;
    protected $Mod_penjual;
    protected $Mod_ikan;
    protected $Mod_pengolahan;
    protected $Mod_berita;
    protected $Mod_transaksi_ikan;
    protected $Mod_hargaikan;
    protected $Mod_pembesaran;
    protected $Mod_tangkap_ikan;
    protected $Mod_pembenihan;
    protected $Mod_pasar;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_user = new Mod_user();
        $this->Mod_transaksi_ikan = new Mod_transaksi_ikan();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_hargaikan = new Mod_hargaikan();
        $this->Mod_berita = new Mod_berita();
        $this->Mod_pembesaran = new Mod_pembesaran();
        $this->Mod_tangkap_ikan = new Mod_tangkap_ikan();
        $this->Mod_pengolahan = new Mod_pengolahan();
        $this->Mod_pembenihan = new Mod_pembenihan();
        $this->Mod_penjual = new Mod_penjual();
        $this->Mod_pasar = new Mod_pasar();
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
        $user = $this->Mod_user->countAllResults();
        $ikan = $this->Mod_ikan->countAllResults();
        $pasar = $this->Mod_pasar->countAllResults();
        $penjual = $this->Mod_penjual->countAllResults();
        $berita = $this->Mod_berita->countAllResults();
        $trans = $this->Mod_transaksi_ikan->countAllResults();
        $olah = $this->Mod_pengolahan->countAllResults();
        $hargaikan = $this->Mod_hargaikan->countAllResults();
        $besar = $this->Mod_pembesaran->countAllResults();
        $benih = $this->Mod_pembenihan->countAllResults();
        $tangkap = $this->Mod_tangkap_ikan->countAllResults();
        $data = [
            'title' => 'Nama',
            'type' => 'Dashboard',
            'head' => 'SISTEM INFORMASI KETERSEDIAAN DAN PENGOLAHAN IKAN DIPASAR PADA KANTOR DINAS PERIKANAN(DISKAN) RANTAU KABUPATEN TAPIN',
            'user' => $user,
            'ikan' => $ikan,
            'pasar' => $pasar,
            'penjual' => $penjual,
            'hargaikan' => $hargaikan,
            'benih' => $benih,
            'besar' => $besar,
            'tangkap' => $tangkap,
            'olah' => $olah,
            'trans' => $trans,
            'berita' => $berita,

        ];

        return view('admin/index', $data);
    }
}
