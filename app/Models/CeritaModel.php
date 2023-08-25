<?php

namespace App\Models;

use CodeIgniter\Model;

class CeritaModel extends Model
{
    protected $table      = 'tb_bacaan';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'kode', 'judul', 'berkas_path', 'level'];
}