<?php

namespace App\Controllers;

use App\Models\casamodel;
use CodeIgniter\Controller;

class Casas extends Controller
{
    public function index()
    {
        $model = new casamodel();
        $data['casas'] = $model->findAll(); // Obtener todas las casas

        return view('casas', $data); // Pasar los datos a la vista correcta
    }

    public function create()
    {
        return view('create'); // Usar la vista correcta para crear
    }

    public function store()
{
    $model = new casamodel();
    $data = [
        'nombre_casa' => $this->request->getPost('nombre_casa'),
        'consumo' => $this->request->getPost('consumo'),
    ];

    if ($model->save($data)) {
        return redirect()->to('/casas');
    } else {
        log_message('error', 'Error al guardar los datos: ' . implode(' ', $model->errors()));
        echo "Error al guardar los datos.";
    }
}
}