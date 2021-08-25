<?php

namespace App\Controllers;

// use CodeIgniter\Controller;

use App\Models\AduanModel;

class Form extends BaseController
{
     protected $aduan;
     public function __construct()
     {
          $this->aduan = new AduanModel();
     }

     public function multipleImage()
     {
          return view('multiple-image');
     }

     public function storeMultipleFile()
     {

          helper(['form', 'url']);

          $db      = \Config\Database::connect();
          $builder = $db->table('file');

          $msg = 'Please select a valid files';

          if ($this->request->getFileMultiple('file')) {

               foreach ($this->request->getFileMultiple('file') as $file) {

                    $file->move(WRITEPATH . 'upload');

                    $data = [
                         'name' =>  $file->getClientName(),
                         'type'  => $file->getClientMimeType()
                    ];

                    $save = $builder->insert($data);
                    $msg = 'Files has been uploaded';
               }
          }

          return redirect()->to(base_url('form/multipleImage'))->with('msg', $msg);
     }


     public function dashboard()
     {
          session();

          $status = [
               'masuk' => 'baru',
               'lanjut1' => 'lanjut1',
               'lanjut2' => 'lanjut2',
               'lanjut3' => 'lanjut3',
               'stop' => 'stop',
               'selesai' => 'selesai'
          ];

          $bulan = [
               'jan' => strtotime('2021-01-01'),
               'feb' => strtotime('2021-02-02'),
               'mar' => strtotime('2021-03-01'),
               'apr' => strtotime('2021-04-01'),
               'may' => strtotime('2021-05-01'),
               'jun' => strtotime('2021-06-01'),
               'jul' => strtotime('2021-07-01'),
               'aug' => strtotime('2021-08-01'),
               'sep' => strtotime('2021-09-01'),
               'ok' => strtotime('2021-10-01'),
               'nov' => strtotime('2021-11-01'),
               'dec' => strtotime('2021-12-01'),
          ];

          $data = [
               'title' => 'Dashboard',
               'bulan' => [
                    'January',
                    'February',
                    'March',
                    'April',
                    'May',
                    'June',
                    'July',
                    'August',
                    'September',
                    'October',
                    'November',
                    'December'
               ],

               'baru_jan' => count($this->aduan->baru($bulan['jan'])),
               'baru_feb' => count($this->aduan->baru($bulan['feb'])),
               'baru_mar' => count($this->aduan->baru($bulan['mar'])),
               'baru_apr' => count($this->aduan->baru($bulan['apr'])),
               'baru_may' => count($this->aduan->baru($bulan['may'])),
               'baru_jun' => count($this->aduan->baru($bulan['jun'])),
               'baru_jul' => count($this->aduan->baru($bulan['jul'])),
               'baru_aug' => count($this->aduan->baru($bulan['aug'])),
               'baru_sep' => count($this->aduan->baru($bulan['sep'])),
               'baru_ok' => count($this->aduan->baru($bulan['ok'])),
               'baru_nov' => count($this->aduan->baru($bulan['nov'])),
               'baru_dec' => count($this->aduan->baru($bulan['dec'])),

               'lanjut1_jan' => count($this->aduan->lanjut1($bulan['jan'])),
               'lanjut1_feb' => count($this->aduan->lanjut1($bulan['feb'])),
               'lanjut1_mar' => count($this->aduan->lanjut1($bulan['mar'])),
               'lanjut1_apr' => count($this->aduan->lanjut1($bulan['apr'])),
               'lanjut1_may' => count($this->aduan->lanjut1($bulan['may'])),
               'lanjut1_jun' => count($this->aduan->lanjut1($bulan['jun'])),
               'lanjut1_jul' => count($this->aduan->lanjut1($bulan['jul'])),
               'lanjut1_aug' => count($this->aduan->lanjut1($bulan['aug'])),
               'lanjut1_sep' => count($this->aduan->lanjut1($bulan['sep'])),
               'lanjut1_ok' => count($this->aduan->lanjut1($bulan['ok'])),
               'lanjut1_nov' => count($this->aduan->lanjut1($bulan['nov'])),
               'lanjut1_dec' => count($this->aduan->lanjut1($bulan['dec'])),

               'lanjut2_jan' => count($this->aduan->lanjut2($bulan['jan'])),
               'lanjut2_feb' => count($this->aduan->lanjut2($bulan['feb'])),
               'lanjut2_mar' => count($this->aduan->lanjut2($bulan['mar'])),
               'lanjut2_apr' => count($this->aduan->lanjut2($bulan['apr'])),
               'lanjut2_may' => count($this->aduan->lanjut2($bulan['may'])),
               'lanjut2_jun' => count($this->aduan->lanjut2($bulan['jun'])),
               'lanjut2_jul' => count($this->aduan->lanjut2($bulan['jul'])),
               'lanjut2_aug' => count($this->aduan->lanjut2($bulan['aug'])),
               'lanjut2_sep' => count($this->aduan->lanjut2($bulan['sep'])),
               'lanjut2_ok' => count($this->aduan->lanjut2($bulan['ok'])),
               'lanjut2_nov' => count($this->aduan->lanjut2($bulan['nov'])),
               'lanjut2_dec' => count($this->aduan->lanjut2($bulan['dec'])),

               'lanjut3_jan' => count($this->aduan->lanjut3($bulan['jan'])),
               'lanjut3_feb' => count($this->aduan->lanjut3($bulan['feb'])),
               'lanjut3_mar' => count($this->aduan->lanjut3($bulan['mar'])),
               'lanjut3_apr' => count($this->aduan->lanjut3($bulan['apr'])),
               'lanjut3_may' => count($this->aduan->lanjut3($bulan['may'])),
               'lanjut3_jun' => count($this->aduan->lanjut3($bulan['jun'])),
               'lanjut3_jul' => count($this->aduan->lanjut3($bulan['jul'])),
               'lanjut3_aug' => count($this->aduan->lanjut3($bulan['aug'])),
               'lanjut3_sep' => count($this->aduan->lanjut3($bulan['sep'])),
               'lanjut3_ok' => count($this->aduan->lanjut3($bulan['ok'])),
               'lanjut3_nov' => count($this->aduan->lanjut3($bulan['nov'])),
               'lanjut3_dec' => count($this->aduan->lanjut3($bulan['dec'])),

               'stop_jan' => count($this->aduan->stop($bulan['jan'])),
               'stop_feb' => count($this->aduan->stop($bulan['feb'])),
               'stop_mar' => count($this->aduan->stop($bulan['mar'])),
               'stop_apr' => count($this->aduan->stop($bulan['apr'])),
               'stop_may' => count($this->aduan->stop($bulan['may'])),
               'stop_jun' => count($this->aduan->stop($bulan['jun'])),
               'stop_jul' => count($this->aduan->stop($bulan['jul'])),
               'stop_aug' => count($this->aduan->stop($bulan['aug'])),
               'stop_sep' => count($this->aduan->stop($bulan['sep'])),
               'stop_ok' => count($this->aduan->stop($bulan['ok'])),
               'stop_nov' => count($this->aduan->stop($bulan['nov'])),
               'stop_dec' => count($this->aduan->stop($bulan['dec'])),

               'selesai_jan' => count($this->aduan->selesai($bulan['jan'])),
               'selesai_feb' => count($this->aduan->selesai($bulan['feb'])),
               'selesai_mar' => count($this->aduan->selesai($bulan['mar'])),
               'selesai_apr' => count($this->aduan->selesai($bulan['apr'])),
               'selesai_may' => count($this->aduan->selesai($bulan['may'])),
               'selesai_jun' => count($this->aduan->selesai($bulan['jun'])),
               'selesai_jul' => count($this->aduan->selesai($bulan['jul'])),
               'selesai_aug' => count($this->aduan->selesai($bulan['aug'])),
               'selesai_sep' => count($this->aduan->selesai($bulan['sep'])),
               'selesai_ok' => count($this->aduan->selesai($bulan['ok'])),
               'selesai_nov' => count($this->aduan->selesai($bulan['nov'])),
               'selesai_dec' => count($this->aduan->selesai($bulan['dec'])),

               'ok' => count($this->aduan->ok())
          ];

          return view('doc/pakEdi', $data);
     }
}
