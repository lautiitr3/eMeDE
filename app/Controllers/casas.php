<?php

namespace App\Controllers;

use App\Models\CasaModel;
use CodeIgniter\Controller;

class Casas extends Controller
{
    public function index()
    {
        $model = new CasaModel();
        $data['casas'] = $model->findAll();

        return view('casas/index', $data);
    }

    public function create()
    {
        return view('casas/create');
    }

    public function store()
    {
        $model = new CasaModel();
        $model->save([
            'nombre' => $this->request->getPost('nombre'),
            'direccion' => $this->request->getPost('direccion'),
            'precio' => $this->request->getPost('precio'),
        ]);

        return redirect()->to('/casas');
    }
}
