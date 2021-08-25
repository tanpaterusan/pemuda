<?php

namespace App\Controllers;

use App\Models\UploadModel;
use App\Models\AduanModel;

class User extends BaseController
{
    public function __construct()
    {
        helper(['form', 'url']);
        $this->upload = new UploadModel();
        $this->aduan = new AduanModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Selamat datang di Aplikasi Pemuda',
        ];

        return view('auth', $data);
    }

    public function buat()
    {
        session();

        $data = [
            'title' => 'Buat Aduan',
        ];

        return view('user/buat', $data);
    }

    public function save()
    {

        $jenis = $this->request->getVar('jenis');
        $hal = $this->request->getVar('perihal');
        $tempat = $this->request->getVar('tempat');
        $waktu = $this->request->getVar('waktu');
        $terlapor = $this->request->getVar('terlapor');
        $uraian = $this->request->getVar('uraian');
        $pelapor = $this->request->getVar('pelapor');
        $telp = $this->request->getVar('telp');
        $pelapor = $this->request->getVar('pelapor');
        $tgl_masuk = time();
        $tiket = $jenis . time();
        $status = 'baru';

        $data = [
            'jenis' => $jenis,
            'perihal' => $hal,
            'tempat' => $tempat,
            'waktu' => $waktu,
            'terlapor' => $terlapor,
            'uraian' => $uraian,
            'pelapor' => $pelapor,
            'telp' => $telp,
            'tgl_masuk' => $tgl_masuk,
            'tiket' => $tiket,
            'status' => $status,
        ];

        $this->aduan->save($data);

        session()->setFlashdata('pesan', 'Terima kasih telah membuat Aduan! Nomor tiket Anda adalah  ' . $tiket . '. Simpan nomor tiket ini baik-baik untuk memantau proses pengaduan Anda.');
        return redirect()->to('user/buat');
    }

    public function file()
    {
        $data = [
            'title' => 'Upload Bukti'
        ];
        return view('user/upload', $data);
    }

    public function upload()
    {
        $db      = \Config\Database::connect();

        $builder = $db->table('tb_file');
        $msg = 'Please select a valid files';


        if ($this->request->getFileMultiple('file')) {

            foreach ($this->request->getFileMultiple('file') as $file) {

                $file->move(WRITEPATH . 'upload');

                $data = [
                    'tiket' => $this->request->getVar('tiket'),
                    'file'  => $file->getClientName(),
                    'type' =>  $file->getClientMimeType(),
                    'role' => 'pelapor'
                ];

                // if ($data['tiket']);

                $save = $builder->insert($data);
                $msg = 'Bukti berhasil di-upload!';
            }
        }

        return redirect()->to(base_url('user/file'))->with('msg', $msg);
    }

    public function cek()
    {
        session();

        $data = [
            'title' => 'Cek Status Aduan',
        ];

        return view('user/cek', $data);
    }

    public function status()
    {
        $tiket = $this->request->getVar('tiket');
        $aduan = $this->aduan->getTiket($tiket);
        if ($aduan !== null) {
            if ($aduan["status"] == "baru") {
                $msg = 'Diterima';
            } elseif ($aduan["status"] == "ditindaklanjuti") {
                $msg = 'Ditindaklanjuti';
            } elseif ($aduan["status"] == "stop") {
                $msg = 'Tidak Ditindaklanjuti';
            } else {
                $msg = 'Selesai';
            }
        } else {
            $msg = 'Maaf, tiket yang Anda masukkan salah!';
        }

        return redirect()->to('user/cek')->with('msg', $msg);
    }

    public function delete($id)
    {
        $this->upload->getDelete($id);
        return redirect()->to('user/file');
    }
}
