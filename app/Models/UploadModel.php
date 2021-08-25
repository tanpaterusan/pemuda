<?php

namespace App\Models;

use CodeIgniter\Model;

class UploadModel extends Model
{
    protected $table = 'tb_file';
    protected $allowedFields = ['tiket', 'file', 'type'];

    // public function insertData($data)
    // {
    //     return $this->db->table('tb_file')->insert($data);
    // }
    // public function insertData($data)
    // {
    //     return $this->db->table($this->table)->insert($data);
    // }

    public function getBukti($tiket)
    {
        return $this->where(['tiket' => $tiket, 'role' => 'pelapor'])->findAll();
    }
    public function getDok($tiket)
    {
        return $this->where(['tiket' => $tiket, 'role' => 'uki'])->findAll();
    }

    public function getDelete($id)
    {
        return $this->db->table($this->table)->delete(['id' => $id]);
    }

    public function upFile($data)
    {
        return $this->db->table($this->table)->insert($data);
    }
}
