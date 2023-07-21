<?php

namespace App\Controllers;

use App\Models\Mod_ikan;
use App\Models\Mod_pembenihan;

class Con_pembenihan extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    protected $Mod_pembenihan;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_pembenihan = new Mod_pembenihan();
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

        $pembenihan = $this->Mod_pembenihan
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_pembenihan.id_ikan')
            ->findAll();
        $ikan = $this->Mod_ikan->findAll();
        $data = [
            'title' => 'Nama',
            'type' => 'Form Pembenihan',
            'head' => 'Form Input Untuk Data Pembenihan Ikan',
            'ikan' => $ikan,
            'pembenihan' => $pembenihan,
        ];

        return view('admin/pembenihan/index', $data);
    }
    function tambah_data()
    {
        $input = $this->request->getPost();

        $data = [
            'id_ikan'        => $input['id_ikan'],
            'tgl_benih'      => $input['tgl_benih'],
            'lokasi_benih'   => $input['lokasi_benih'],
            'metode'         => $input['metode'],
            'jumlah_betina'  => $input['jumlah_betina'],
            'jumlah_jantan'  => $input['jumlah_jantan'],
            'jumlah_telur'   => $input['jumlah_telur'],
            'status_benih'   => $input['status_benih'],
            'keterangan'     => $input['keterangan'],
        ];

        $status = $this->Mod_pembenihan->insert($data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function detail($id)
    {
        $pembenihan = $this->Mod_pembenihan
            ->join('tb_ikan', 'tb_ikan.id_ikan = tb_pembenihan.id_ikan')
            ->first();

        $data = [
            'title' => 'Nama',
            'type' => 'Form  Pembenihan ID. ' . $id . ' - ' . $pembenihan['nama_ikan'],
            'head' => 'Form Edit Pembenihan',
            'pembenihan' => $pembenihan,
        ];

        return view('admin/pembenihan/detail', $data);
    }
    function simpan_edit($id)
    {
        $input = $this->request->getPost();

        $data = [
            'id_ikan'        => $input['id_ikan'],
            'tgl_benih'      => $input['tgl_benih'],
            'lokasi_benih'   => $input['lokasi_benih'],
            'metode'         => $input['metode'],
            'jumlah_betina'  => $input['jumlah_betina'],
            'jumlah_jantan'  => $input['jumlah_jantan'],
            'jumlah_telur'   => $input['jumlah_telur'],
            'status_benih'   => $input['status_benih'],
            'keterangan'     => $input['keterangan'],
        ];
        $status = $this->Mod_pembenihan->update($id, $data);
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function hapus_data($id)
    {
        $status = $this->Mod_pembenihan
            ->where('id_pembenihan', $id)
            ->delete();

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_pembenihan');
    }
}
