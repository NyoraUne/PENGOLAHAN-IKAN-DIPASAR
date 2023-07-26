<?php

namespace App\Controllers;

use App\Models\Mod_berita;

class User extends BaseController
{
    protected $session;
    protected $Mod_berita;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_berita = new Mod_berita();
    }

    public function index()
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        // $berita = $this->Mod_berita->paginate(2);
        // $pager = $this->Mod_berita->pager();
        $data = [
            'berita' => $this->Mod_berita->orderBy('created_at', 'desc')->paginate(2, 'tb_berita'),
            'pager' => $this->Mod_berita->pager,

        ];

        return view('user/index', $data);
    }
}
