<?php

namespace App\Models;

use CodeIgniter\Model;

class BelajarModel extends Model
{
    protected $table      = 'tb_belajar';
    protected $primaryKey = 'belajar_id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['belajar_id', 'uuid', 'bacaan_id', 'hikmah', 'reaction', 'komentar'];
}