<?php

namespace App\Controllers;

use App\Models\CasaModel;
use App\Models\DireccionModel;
use App\Models\CiudadModel;
use CodeIgniter\Controller;

class CasasController extends Controller
{
    public function index()
    {
        $model = new CasaModel();
        $data['casas'] = $model->getCasasWithDetails();

        return view('casas', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $model = new CasaModel();

        $direccionModel = new DireccionModel();
        $ciudadModel = new CiudadModel();

        // Obtener ciudad
        $ciudadData = [
            'nombre_ciudad' => $this->request->getPost('ciudad')
        ];
        $ciudadModel->insert($ciudadData);
        $id_ciudad = $ciudadModel->getInsertID();

        // Obtener dirección
        $direccionData = [
            'calle' => $this->request->getPost('calle'),
            'numero' => $this->request->getPost('numero'),
            'id_ciudad' => $id_ciudad
        ];
        $direccionModel->insert($direccionData);
        $id_direccion = $direccionModel->getInsertID();

        $data = [
            'nombre_casa' => $this->request->getPost('nombre'),
            'id_direccion' => $id_direccion,
            'id_ciudad' => $id_ciudad,
            'consumo' => 0 // Asumiendo que el consumo inicial es 0
        ];

        if ($model->save($data)) {
            return redirect()->to('/casas');
        } else {
            log_message('error', 'Error al guardar los datos: ' . implode(' ', $model->errors()));
            echo "Error al guardar los datos.";
        }
    }

    public function delete($id)
    {
        $model = new CasaModel();
        $model->delete($id);

        return redirect()->to('/casas');
    }
}