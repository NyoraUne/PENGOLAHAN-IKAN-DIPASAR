<?php

namespace App\Controllers;

use App\Models\Mod_pasar;
use App\Models\Mod_user;
use App\Models\Mod_penjual;


class Con_penjual extends BaseController
{
    protected $session;
    protected $Mod_pasar;
    protected $Mod_user;
    protected $Mod_penjual;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_pasar = new Mod_pasar();
        $this->Mod_user = new Mod_user();
        $this->Mod_penjual = new Mod_penjual();
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

        $pasar = $this->Mod_pasar->findAll();
        $user = $this->Mod_user->findAll();
        $penjual = $this->Mod_penjual
            ->join('tb_user', 'tb_user.id_user = tb_penjual.id_user')
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_penjual.id_pasar')
            ->findAll();

        // dd($penjual);

        $data = [
            'title' => 'Wildan - 19630151',
            'head' => 'Form Input, Edit Dan Hapus Data Pasar.',
            'type' => 'Form Penjual',
            'pasar' => $pasar,
            'user' => $user,
            'penjual' => $penjual,
        ];

        return view('admin/penjual/index', $data);
    }
    function tambah_penjual()
    {
        $input = $this->request->getPost();
        $nama_toko = ucfirst($input['nama_toko']);

        $data = [
            'id_pasar' => $input['id_pasar'],
            'id_user' => $input['id_user'],
            'nama_toko' => $nama_toko,
            'kontak_toko' => $input['kontak_toko'],
        ];

        $status = $this->Mod_penjual->insert($data);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function hapus_pasar($id)
    {
        $status = $this->Mod_pasar->delete($id);

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->back();
    }
    function edit_penjual($id)
    {
        $penjual = $this->Mod_penjual
            ->join('tb_user', 'tb_user.id_user = tb_penjual.id_user')
            ->join('tb_pasar', 'tb_pasar.id_pasar = tb_penjual.id_pasar')
            ->where('id_penjual', $id)
            ->first();

        $user = $this->Mod_user->findAll();
        $pasar = $this->Mod_pasar->findAll();

        $data = [
            'title' => 'Edit Form Pasar | Wildan',
            'head' => 'Form Edit Pasar.',
            'type' => 'Form Edit Pasar ID. ' . $penjual['id_penjual'],
            'penjual' => $penjual,
            'user' => $user,
            'pasar' => $pasar,
        ];
        echo view('admin/penjual/edit_penjual', $data);
    }
    function simpan_edit_penjual($id)
    {
        $input = $this->request->getPost();
        $nama_toko = ucfirst($input['nama_toko']);

        $data = [
            'id_pasar' => $input['id_pasar'],
            'id_user' => $input['id_user'],
            'nama_toko' => $nama_toko,
            'kontak_toko' => $input['kontak_toko'],
        ];



        $status = $this->Mod_penjual->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_edit', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_edit', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_penjual/index');
    }
}
