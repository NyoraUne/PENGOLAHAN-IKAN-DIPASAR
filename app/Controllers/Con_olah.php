<?php

namespace App\Controllers;

use App\Models\Mod_ikan;
use App\Models\Mod_pengolahan;

class Con_olah extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    protected $Mod_pengolahan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_pengolahan = new Mod_pengolahan();
    }
    // NOTE - index
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
        $ikan = $this->Mod_ikan->findAll();
        $olahan = $this->Mod_pengolahan
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_pengolahan_ikan.id_ikan')
            ->findAll();
        $data = [
            'title' => 'Nama',
            'type' => 'Form Pengolahan Ikan',
            'head' => 'Form Input Untuk Data Pengolahan Ikan. ',
            'ikan' => $ikan,
            'olahan' => $olahan,
        ];

        return view('admin/olah/index', $data);
    }
    //NOTE - Tambah Data
    function tambah_data()
    {
        $input = $this->request->getPost();

        $data = [
            'id_ikan' => $input['id_ikan'],
            'tanggal_olah' => $input['tanggal_olah'],
            'jenis_olah' => $input['jenis_olah'],
            'jumlah_olah' => $input['jumlah_olah'],
            'durasi_olah' => $input['durasi_olah'],
            'catatan' => $input['catatan'],
        ];
        $status = $this->Mod_pengolahan->insert($data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    //NOTE - Detail
    function detail($id)
    {
        $olahan = $this->Mod_pengolahan
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_pengolahan_ikan.id_ikan')
            ->where('id_pengolahan_ikan', $id)
            ->first();

        $data = [
            'title' => 'Nama',
            'type' => 'Form Detail Pengolahan Ikan',
            'head' => 'Form Detail Untuk Data Pengolahan Ikan. ',
            'olahan' => $olahan,
        ];
        return view('admin/olah/detail', $data);
    }
    //NOTE - hapus data
    function hapus_data($id)
    {
        $status = $this->Mod_pengolahan->where('id_pengolahan_ikan', $id)->delete();
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->to('Con_olah/index');
    }
    //NOTE - Simpan Edit
    function simpan_edit($id)
    {
        $input = $this->request->getPost();

        $data = [
            'id_ikan' => $input['id_ikan'],
            'tanggal_olah' => $input['tanggal_olah'],
            'jenis_olah' => $input['jenis_olah'],
            'jumlah_olah' => $input['jumlah_olah'],
            'durasi_olah' => $input['durasi_olah'],
            'catatan' => $input['catatan'],
        ];

        $status = $this->Mod_pengolahan->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
}
