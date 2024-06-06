<?php

namespace App\Models;

use CodeIgniter\Model;

class CasaModel extends Model
{
    protected $table      = 'casas';
    protected $primaryKey = 'id_casas';
    protected $allowedFields = ['nombre_casa', 'consumo',];
}