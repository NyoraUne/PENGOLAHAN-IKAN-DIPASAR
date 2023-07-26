<?php

namespace App\Controllers;

use App\Models\Mod_berita;
use App\Models\Mod_comment;
use Dompdf\Dompdf;
use Dompdf\Options;
use Dompdf\Output\Options as OutputOptions;
use Dompdf\Output\DefaultRenderer;


class Lap_berita extends BaseController


{
    protected $session;
    protected $Mod_berita;
    protected $Mod_comment;
    public function __construct()
    {
        $this->session = session();
        $this->Mod_berita = new Mod_berita();
        $this->Mod_comment = new Mod_comment();
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

        $comment = $this->Mod_comment
            ->select(['*', 'tb_comment.created_at as dibuat'])
            ->join('tb_berita', 'tb_berita.id_berita = tb_comment.id_berita')
            ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
            ->findAll();

        $data = [
            'title' => 'Nama',
            'type' => 'Laporan Data Berita',
            'head' => 'Laporan Data Berita Yang Di Buat',
            'comment' => $comment,
        ];

        return view('admin/Laporan/berita/index', $data);
    }
    function filter()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            $var = $this->Mod_berita
                ->orderBy('created_at', 'desc')->findAll();
            $msg = '';
        } else if (empty($tgl1)) {
            $var = $this->Mod_berita
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            $var = $this->Mod_berita
                ->where('created_at >=', $tgl1)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            $var = $this->Mod_berita
                ->where('created_at >=', $tgl1)
                ->where('created_at <=', $tgl2)
                ->orderBy('created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'berita' => $var,
            'msg' => $msg,
            'title' => 'Laporan Data Berita',
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        $html = view('admin/Laporan/berita/cetak', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();


        $dompdf->stream('laporan.pdf', [
            'Attachment' => false // This is set to false to display the PDF directly
        ]);
    }
    function hapus_comment($id)
    {
        $status = $this->Mod_comment->where('id_comment', $id)->delete();
        if ($status) {
            // Jika data berhasil disimpan
            $this->session->setFlashdata('success_hapus', 'Data berhasil disimpan.');
        } else {
            // Jika data gagal disimpan
            $this->session->setFlashdata('error_hapus', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->back();
    }
    function filter_comment()
    {
        $lap = $this->request->getPost();

        $tgl1 = $lap['tm'];
        $tgl2 = $lap['ta'];
        // dd($tgl2, $tgl1);

        if (empty($tgl1) && empty($tgl2)) {
            // $var = $this->Mod_berita
            //     ->orderBy('created_at', 'desc')->findAll();
            $var = $this->Mod_comment
                ->select(['*', 'tb_comment.created_at as dibuat'])
                ->join('tb_berita', 'tb_berita.id_berita = tb_comment.id_berita')
                ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
                ->orderBy('tb_comment.created_at', 'desc')
                ->findAll();
            $msg = '';
        } else if (empty($tgl1)) {
            // $var = $this->Mod_berita
            //     ->where('created_at <=', $tgl2)
            //     ->orderBy('created_at', 'desc')
            //     ->findAll();

            $var = $this->Mod_comment
                ->select(['*', 'tb_comment.created_at as dibuat'])
                ->join('tb_berita', 'tb_berita.id_berita = tb_comment.id_berita')
                ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
                ->where('tb_comment.created_at <=', $tgl2)
                ->orderBy('tb_comment.created_at', 'desc')
                ->findAll();

            $msg = 'Menampilkan Semua Data Di Bawah Tanggal : ' . $tgl2;
        } else if (empty($tgl2)) {
            // $var = $this->Mod_berita
            //     ->where('created_at >=', $tgl1)
            //     ->orderBy('created_at', 'desc')
            //     ->findAll();

            $var = $this->Mod_comment
                ->select(['*', 'tb_comment.created_at as dibuat'])
                ->join('tb_berita', 'tb_berita.id_berita = tb_comment.id_berita')
                ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
                ->where('tb_comment.created_at >=', $tgl1)
                ->orderBy('tb_comment.created_at', 'desc')
                ->findAll();

            $msg = 'Menampilkan Semua Data Di Atas Tanggal : ' . $tgl1;
        } else {
            // Jika input tanggal tidak kosong, terapkan filter
            // $var = $this->Mod_berita
            //     ->where('created_at >=', $tgl1)
            //     ->where('created_at <=', $tgl2)
            //     ->orderBy('created_at', 'desc')
            //     ->findAll();

            $var = $this->Mod_comment
                ->select(['*', 'tb_comment.created_at as dibuat'])
                ->join('tb_berita', 'tb_berita.id_berita = tb_comment.id_berita')
                ->join('tb_login', 'tb_login.id_login = tb_comment.id_login')
                ->where('tb_comment.created_at >=', $tgl1)
                ->where('tb_comment.created_at <=', $tgl2)
                ->orderBy('tb_comment.created_at', 'desc')
                ->findAll();
            $msg = 'Menampilkan Semua Data Di Antara Tanggal ' . $tgl1 . ' Sampai ' . $tgl2 . '.';
        }

        $data = [
            'berita' => $var,
            'msg' => $msg,
            'title' => 'Laporan Data Berita',
        ];
        // dd($data);

        // echo view('user/laporan/dataikan', $data);

        // return view('admin/Laporan/ikan/cetak');
        $html = view('admin/Laporan/berita/cetak_komentar', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();


        $dompdf->stream('laporan.pdf', [
            'Attachment' => false // This is set to false to display the PDF directly
        ]);
    }
}
