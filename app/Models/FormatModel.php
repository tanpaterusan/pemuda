<?php

namespace App\Models;

use CodeIgniter\Model;

class FormatModel extends Model
{
    protected $table = 'tb_format';
    protected $allowedFields = ['head', 'title', 'link'];

    public function getFormat($head)
    {
        if ($head == 'pulbaket') {
            return $this->where(['head' => 'pulbaket'])->findAll();
        } elseif ($head == 'pemeriksaan') {
            return $this->where(['head' => 'pemeriksaan'])->findAll();
        }
    }
}
