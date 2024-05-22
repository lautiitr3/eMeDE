<?php

namespace App\Models;

use CodeIgniter\Model;

class DispositivoModel extends Model
{
    protected $table = 'dispositivo';
    protected $primaryKey = 'd_dispositivo';
    protected $allowedFields = ['nombre_dispositivo', 'potencia', 'descripcion'];
}
