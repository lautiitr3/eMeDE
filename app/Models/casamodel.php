<?php

namespace App\Models;

use CodeIgniter\Model;

class CasaModel extends Model
{
    protected $table      = 'casas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'direccion', 'precio'];
}