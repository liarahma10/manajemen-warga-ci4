<?php

namespace App\Models;

use CodeIgniter\Model;

class WargaModel extends Model
{
    protected $table = 'warga';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'alamat', 'umur'];
}
