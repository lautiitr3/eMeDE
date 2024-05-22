<?php

namespace App\Models;

use CodeIgniter\Model;

class ConsumoModel extends Model
{
    protected $table = 'consumo';
    protected $primaryKey = 'id_consumo';
    protected $allowedFields = ['id_dispositivo', 'id_usuario', 'Energia', 'Tiempo', 'fecha_registro'];
}
