<?php

namespace App\Models;

use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'tb_log';
    protected $allowedFields = ['username', 'act', 'time'];
}
