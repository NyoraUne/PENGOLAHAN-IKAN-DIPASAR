<?php

namespace App\Controllers;

use App\Models\Mod_berita;

class User_view extends BaseController
{
    protected $session;
    protected $Mod_berita;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_berita = new Mod_berita();
    }

    public function index($id)
    {
        //cek apakah ada session bernama isLogin
        if (!$this->session->has('isLogin')) {
            return redirect()->to('/auth/login');
        }

        $berita = $this->Mod_berita

            ->where('id_berita', $id)
            ->first();
        // $user = $this->Mod_user->where('id_user', $id)->first();

        $data = [
            'berita' => $berita,

        ];
        // dd($data, $id);

        return view('user/view', $data);
    }
}
