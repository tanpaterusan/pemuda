<?php

namespace App\Controllers;

use App\Models\AduanModel;
use App\Models\UploadModel;
use App\Models\FormatModel;
use App\Models\LogModel;

use TCPDF;

class Admin extends BaseController
{
	protected $aduanModel;
	public function __construct()
	{
		$this->aduan = new AduanModel();
		$this->upload = new UploadModel();
		$this->format = new FormatModel();
		$this->log = new LogModel();
	}

	public function index()
	{

		$status = [
			'baru' => 'baru',
			'lanjut1' => 'lanjut1',
			'lanjut2' => 'lanjut2',
			'lanjut3' => 'lanjut3',
			'stop' => 'stop',
			'selesai' => 'selesai'
		];

		$data = [
			'title' => 'Dashboard',
			'baru' => count($this->aduan->getVerif($status['baru'])),
			'lanjut1' => count($this->aduan->getVerif($status['lanjut1'])),
			'lanjut2' => count($this->aduan->getVerif($status['lanjut2'])),
			'lanjut3' => count($this->aduan->getVerif($status['lanjut3'])),
			'stop' => count($this->aduan->getVerif($status['stop'])),
			'selesai' => count($this->aduan->getVerif($status['selesai'])),

			'aduan' => $this->aduan->findAll()
		];

		return view('admin/index', $data);
	}

	public function log()
	{
		$data = [
			'title' => 'Activity Log Admin',
			'log' => $this->log->findAll()
		];

		return view('admin/log', $data);
	}


	//pre-verifikasi

	public function pre()
	{
		session();

		$status = 'baru';

		$data = [
			'title' => 'Pre-Verifikasi',
			'aduan' => $this->aduan->getVerif($status)
		];
		return view('admin/pre', $data);
	}

	public function verif0()
	{
		$this->aduan->save([
			'id' => $this->request->getVar('id'),
			'status' => $this->request->getVar('status'),
			'ket' => $this->request->getVar('ket')
		]);

		//act log
		session();
		$user = user()->username;
		$this->log->save([
			'username' => $user,
			'act' => 'melakukan pre-verifikasi',
			'time' => time()
		]);

		session()->setFlashdata('pesan', 'Pengaduan berhasil diverifikasi!');
		return redirect()->to('admin/pre');
	}



	//tahap 1

	public function tahap1()
	{
		$status = 'lanjut1';
		$data = [
			'title' => 'Verifikasi Tahap I',
			'aduan' => $this->aduan->getVerif($status)
		];
		return view('admin/tahap1', $data);
	}

	public function verif1()
	{
		$this->aduan->save([
			'id' => $this->request->getVar('id'),
			'status' => $this->request->getVar('status'),
			'langkah' => $this->request->getVar('langkah'),
			'ket' => $this->request->getVar('ket')
		]);

		session();
		$user = user()->username;
		$this->log->save([
			'username' => $user,
			'act' => 'melakukan verifikasi tahap 1',
			'time' => time()
		]);

		session()->setFlashdata('pesan', 'Pengaduan berhasil diverifikasi!');
		return redirect()->to('admin/tahap1');
	}


	//tahap 2

	public function tahap2()
	{
		$status = 'lanjut2';
		$data = [
			'title' => 'Verifikasi Tahap II',
			'aduan' => $this->aduan->getVerif($status)
		];
		return view('admin/tahap2', $data);
	}

	public function verif2()
	{
		$this->aduan->save([
			'id' => $this->request->getVar('id'),
			'status' => $this->request->getVar('status'),
			'langkah' => $this->request->getVar('langkah'),
			'ket' => $this->request->getVar('ket')
		]);

		session();
		$user = user()->username;
		$this->log->save([
			'username' => $user,
			'act' => 'melakukan verifikasi tahap 2',
			'time' => time()
		]);

		session()->setFlashdata('pesan', 'Pengaduan berhasil diverifikasi!');
		return redirect()->to('admin/tahap2');
	}


	//tahap 3

	public function tahap3()
	{
		$status = 'lanjut3';
		$data = [
			'title' => 'Verifikasi Tahap III',
			'aduan' => $this->aduan->getVerif($status)
		];
		return view('admin/tahap3', $data);
	}

	public function verif3()
	{
		$this->aduan->save([
			'id' => $this->request->getVar('id'),
			'status' => $this->request->getVar('status'),
			'langkah' => $this->request->getVar('langkah'),
			'ket' => $this->request->getVar('ket')
		]);


		session();
		$user = user()->username;
		$this->log->save([
			'username' => $user,
			'act' => 'melakukan varifikasi tahap 3',
			'time' => time()
		]);

		session()->setFlashdata('pesan', 'Pengaduan berhasil diverifikasi!');
		return redirect()->to('admin/tahap3');
	}




	//pulbaket
	public function pulbaket()
	{
		$head = 'pulbaket';
		$data = [
			'title' => 'Proses Pulbaket',
			'format' => $this->format->getFormat($head),
		];

		return view('admin/pulbaket', $data);
	}

	//pemeriksaan
	public function pemeriksaan()
	{
		$head = 'pemeriksaan';
		$data = [
			'title' => 'Proses Pemeriksaan',
			'format' => $this->format->getFormat($head)
		];

		return view('admin/pemeriksaan', $data);
	}

	//tambah format
	public function tambahFormat()
	{
		$this->format->save([
			'head' => $this->request->getVar('head'),
			'title' => $this->request->getVar('title'),
			'link' => $this->request->getVar('link')
		]);

		session()->setFlashdata('pesan', 'Format berhasil ditambahkan!');
		return redirect()->to('admin/index');
	}




	public function detail($id)
	{
		$aduan = $this->aduan->getAduan($id);
		$tiket = $aduan['tiket'];
		$data = [
			'title' => 'Detail Aduan',
			'aduan' => $aduan,
			'bukti' => $this->upload->getBukti($tiket),
			'dok' => $this->upload->getDok($tiket)
		];

		return view('admin/detail', $data);
	}

	public function download($id)
	{
		$name = $this->upload->find($id);
		return $this->response->download(WRITEPATH . 'upload/' . $name['file'], null);
	}


	public function pdfDetail($id)
	{
		$aduan = $this->aduan->getAduan($id);
		$tiket = $aduan['tiket'];
		$data = [
			'title' => 'Detail Aduan',
			'aduan' => $aduan,
			'file' => $this->upload->getBukti($tiket)
		];

		$html = view('admin/detail_pdf', $data);

		$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
		$pdf->AddPage();
		$pdf->WriteHTML($html);
		$this->response->setContentType('application/pdf');
		$pdf->Output('detail-pengaduan.pdf', 'I');
	}


	public function file()
	{
		$data = [
			'title' => 'Dokumen Tindak Lanjut',
		];
		return view('admin/file', $data);
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
					'role' => 'uki'
				];

				$save = $builder->insert($data);
				$msg = 'Bukti berhasil di-upload!';
			}
		}

		return redirect()->to(base_url('user/file'))->with('msg', $msg);
	}
}
