<?php

namespace App\Models;

use CodeIgniter\Model;

class AduanModel extends Model
{
    protected $table = 'tb_aduan';
    protected $allowedFields = [
        'jenis',
        'perihal',
        'tempat',
        'waktu',
        'terlapor',
        'uraian',
        'pelapor',
        'telp',
        'tgl_masuk',
        'tiket',
        'status',
        'ket',
        'langkah'
    ];

    public function getAduan($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    public function getVerif($status)
    {
        if ($status == 'baru') {
            return $this->where(['status' => 'baru'])->findAll();
        } elseif ($status == 'lanjut1') {
            return $this->where(['status' => 'lanjut1'])->findAll();
        } elseif ($status == 'lanjut2') {
            return $this->where(['status' => 'lanjut2'])->findAll();
        } elseif ($status == 'lanjut3') {
            return $this->where(['status' => 'lanjut3'])->findAll();
        } elseif ($status == 'stop') {
            return $this->where(['status' => 'stop'])->findAll();
        } else {
            return $this->where(['status' => 'selesai'])->findAll();
        }
    }

    public function baru($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'baru', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }

    public function lanjut1($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'lanjut1', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }

    public function lanjut2($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'lanjut2', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }

    public function lanjut3($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'lanjut3', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }

    public function stop($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'stop', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }

    public function selesai($bulan)
    {
        $time = [
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
            'last_dec' => strtotime('2022-01-01')
        ];

        if ($bulan == $time['jan']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['jan'], 'tgl_masuk' < $time['feb']])->findAll();
        } elseif ($bulan == $time['feb']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['feb'], 'tgl_masuk' < $time['mar']])->findAll();
        } elseif ($bulan == $time['mar']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['mar'], 'tgl_masuk' < $time['apr']])->findAll();
        } elseif ($bulan == $time['apr']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['apr'], 'tgl_masuk' < $time['may']])->findAll();
        } elseif ($bulan == $time['may']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['may'], 'tgl_masuk' < $time['jun']])->findAll();
        } elseif ($bulan == $time['jun']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['jun'], 'tgl_masuk' < $time['jul']])->findAll();
        } elseif ($bulan == $time['jul']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['jul'], 'tgl_masuk' < $time['aug']])->findAll();
        } elseif ($bulan == $time['aug']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['aug'], 'tgl_masuk' < $time['sep']])->findAll();
        } elseif ($bulan == $time['sep']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['sep'], 'tgl_masuk' < $time['ok']])->findAll();
        } elseif ($bulan == $time['ok']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['ok'], 'tgl_masuk' < $time['nov']])->findAll();
        } elseif ($bulan == $time['nov']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['nov'], 'tgl_masuk' < $time['dec']])->findAll();
        } elseif ($bulan == $time['dec']) {
            return $this->where(['status' => 'selesai', 'tgl_masuk' > $time['dec'], 'tgl_masuk' < $time['last_dec']])->findAll();
        }
    }



    public function ok()
    {
        //agustus
        return $this->where(['status' => 'baru', 'tgl_masuk' > strtotime('2021 - 08 - 01'), 'tgl_masuk' < strtotime('2021 - 09 - 01')])->findAll();
    }
}
