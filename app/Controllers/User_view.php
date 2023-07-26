<?php

namespace App\Controllers;

use App\Models\Mod_berita;
use App\Models\Mod_login;
use App\Models\Mod_comment;

class User_view extends BaseController
{
    protected $session;
    protected $Mod_berita;
    protected $Mod_comment;
    protected $Mod_login;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_berita = new Mod_berita();
        $this->Mod_login = new Mod_login();
        $this->Mod_comment = new Mod_comment();
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
        $find = $this->session->get();
        $comment = $this->Mod_comment
            ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
            ->where('id_berita', $id)
            ->findAll();
        $data = [
            'berita' => $berita,
            'user' => $find,
            'comment' => $comment,
        ];
        // dd($comment);

        return view('user/view', $data);
    }
    function publish($id)
    {
        $var = $this->request->getPost();
        // dd($id, $var);
        $data = [
            'id_login' => $var['id_login'],
            'id_berita' => $id,
            'isi' => $var['isi'],
        ];

        $this->Mod_comment->insert($data);

        return redirect()->back();
    }
}
