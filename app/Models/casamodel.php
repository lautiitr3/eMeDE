<?php

namespace App\Models;

use CodeIgniter\Model;

class CasaModel extends Model
{
    protected $table      = 'casas';
    protected $primaryKey = 'id_casa';
    protected $allowedFields = ['nombre_casa', 'id_direccion', 'id_ciudad', 'consumo'];
}