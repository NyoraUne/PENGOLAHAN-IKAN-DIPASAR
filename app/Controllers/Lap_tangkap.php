<?php

namespace App\Controllers;

use App\Models\Mod_tangkap_ikan;
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Output\Options as OutputOptions;
use Dompdf\Output\DefaultRenderer;


class Lap_tangkap extends BaseController


{
    protected $session;
    protected $Mod_tangkap_ikan;
    public function __construct()
    {
        $this->session = session();
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
        $data = [
            'title' => 'Nama',
            'type' => 'Laporan Penangkapan Ikan',
            'head' => 'Data Laporan Penangkapan Ikan',
        ];

        return view('admin/Laporan/tangkap/index', $data);
    }
    function filter()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $ikan = $this->Mod_tangkap_ikan
                ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
                ->orderBy('tb_perikanan_tangkap.created_at', 'desc')->findAll();
            $msg = '';
        } else if (empty($tgl1)) {
            $ikan = $this->Mod_tangkap_ikan
                ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
                ->where('tb_perikanan_tangkap.created_at <=', $tgl2)
                ->orderBy('tb_perikanan_tangkap.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $ikan = $this->Mod_tangkap_ikan
                ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
                ->where('tb_perikanan_tangkap.created_at >=', $tgl1)
                ->orderBy('tb_perikanan_tangkap.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $ikan = $this->Mod_tangkap_ikan
                ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
                ->where('tb_perikanan_tangkap.created_at >=', $tgl1)
                ->join('tb_user', 'tb_user.id_user = tb_perikanan_tangkap.id_user')
                ->where('tb_perikanan_tangkap.created_at <=', $tgl2)
                ->orderBy('tb_perikanan_tangkap.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'tangkap' => $ikan,
            'msg' => $msg,
            'title' => 'Laporan Data Penangkapan Ikan',
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        $html = view('admin/Laporan/tangkap/cetak', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();


        $dompdf->stream('laporan.pdf', [
            'Attachment' => false // This is set to false to display the PDF directly
        ]);
    }
}
