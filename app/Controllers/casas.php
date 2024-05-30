<?php

namespace App\Controllers;

use App\Models\casamodel;
use CodeIgniter\Controller;

class Casas extends Controller
{
    public function index()
    {
        $model = new CasaModel();
        $data['casas'] = $model->findAll(); // Obtener todas las casas

        return view('casas', $data); // Pasar los datos a la vista correcta
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $model = new CasaModel();
        $model->save([
            'nombre_casa' => $this->request->getPost('nombre_casa'),
            'consumo' => $this->request->getPost('consumo'),
        ]);

        return redirect()->to('/casas');
    }
}