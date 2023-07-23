<?php

namespace App\Controllers;

use App\Models\Mod_ikan;
use App\Models\Mod_pembesaran;
use App\Models\Mod_tangkap_ikan;
use App\Models\Mod_user;
use App\Models\Mod_detail_tangkap;


class Con_penangkapan extends BaseController
{
    protected $session;
    protected $Mod_ikan;
    protected $Mod_pembesaran;
    protected $Mod_detail_tangkap;
    protected $Mod_tangkap_ikan;
    protected $Mod_user;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_ikan = new Mod_ikan();
        $this->Mod_pembesaran = new Mod_pembesaran();
        $this->Mod_detail_tangkap = new Mod_detail_tangkap();
        $this->Mod_user = new Mod_user();
        $this->Mod_tangkap_ikan = new Mod_tangkap_ikan();
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

        $user = $this->Mod_user->findAll();
        $pembesaran = $this->Mod_pembesaran
            ->join('tb_ikan', 'tb_ikan.id_ikan=tb_pembesaran.id_ikan')
            ->orderBy('tb_pembesaran.created_at', 'desc')
            ->findAll();

        $penangkapan = $this->Mod_tangkap_ikan
            ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
            ->findAll();

        $data = [
            'title' => 'Nama',
            'type' => 'Form Penangkapan Ikan',
            'head' => 'Form Input Untuk Data Penangkapan Ikan Oleh Nelayan',
            'user' => $user,
            'pembesaran' => $pembesaran,
            'penangkapan' => $penangkapan,
        ];

        return view('admin/penangkapan/index', $data);
    }
    function simpan_data()
    {
        $input = $this->request->getPost();
        $data = [
            'jenis_perairan' => $input['jenis_perairan'],
            'lokasi' => $input['lokasi'],
            'tanggal' => $input['tanggal'],
            'jenis_kapal' => $input['jenis_kapal'], // Assuming 'jenis_kapal' is a key in $input array
            'alat_tangkap' => $input['alat_tangkap'], // Assuming 'alat_tangkap' is a key in $input array
            'id_user' => $input['id_user'], // Assuming 'id_user' is a key in $input array
            'jumlah_tangkap' => $input['jumlah_tangkap'],
            'keterangan' => $input['keterangan'],
        ];
        // dd($data);

        $status = $this->Mod_tangkap_ikan->insert($data);

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
        $penangkapan = $this->Mod_tangkap_ikan
            ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
            ->where('id_perikanan_tangkap', $id)
            ->first();

        $detail = $this->Mod_detail_tangkap->select('id_ikan')->where('id_perikanan_tangkap', $id)->findAll();
        $id_ikans = array_column($detail, 'id_ikan');

        if ($id_ikans == null) {
            $ikan = $this->Mod_ikan->findAll();
        } else {
            $ikan = $this->Mod_ikan->whereNotIn('id_ikan', $id_ikans)->findAll();
        }


        $datail = $this->Mod_detail_tangkap
            ->join('tb_ikan', 'tb_ikan.id_ikan = detail_tangkap.id_ikan')
            ->where('id_perikanan_tangkap', $id)
            ->findAll();

        $data = [
            'title' => 'Nama',
            'type' => 'Form Penangkapan Ikan ID. ' . $penangkapan['id_perikanan_tangkap'] . ' - ' . $penangkapan['nama_user'],
            'head' => 'Form Detail Penangkapan Ikan',
            'ikan' => $ikan,
            'penangkapan' => $penangkapan,
            'datail' => $datail,
        ];

        return view('admin/penangkapan/detail', $data);
    }
    function simpan_edit($id)
    {
        $input = $this->request->getPost();
        $data = [
            'id_ikan' => $input['id_ikan'],
            'tgl_mulai' => $input['tgl_mulai'],
            'tgl_selesai' => $input['tgl_selesai'],
            'lokasi' => $input['lokasi'],
            'suhu_air' => $input['suhu_air'],
            'jumlah_pakan' => $input['jumlah_pakan'],
            'kondisi_kesehatan' => $input['kondisi_kesehatan'],
            'keterangan' => $input['keterangan'],
        ];

        $status = $this->Mod_pembesaran->update($id, $data);
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
        $status = $this->Mod_pembesaran
            ->where('id_pembesaran', $id)
            ->delete();

        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to('Con_pembesaran');
    }
    function add_ikan($id)
    {
        $input = $this->request->getPost();
        $data = [
            'id_perikanan_tangkap' => $id,
            'id_ikan' => $input['id_ikan'],
        ];

        $status = $this->Mod_detail_tangkap->insert($data);


        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->to("Con_penangkapan/detail/$id");
    }
    function hapus_ikan($id)
    {


        $status = $this->Mod_detail_tangkap->where('id_detail_tangkap', $id)->delete();
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error', 'Terjadi kesalahan saat menyimpan data.');
        }
        return redirect()->back();
    }
}
