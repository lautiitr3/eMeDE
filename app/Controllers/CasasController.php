<?php

namespace App\Controllers;

use App\Models\CasaModel;
use CodeIgniter\Controller;
use App\Models\DireccionModel;
use App\Models\CiudadModel;

class CasasController extends Controller
{
    public function index()
    {
        $model = new CasaModel();
        $data['casas'] = $model->findAll();

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
    
        // Obtener los datos del formulario
        $nombre_casa = $this->request->getPost('nombre');
        $direccion = $this->request->getPost('direccion');
        $ciudad = $this->request->getPost('ciudad');
    
        // Insertar la ciudad en la tabla ciudades si no existe
        $ciudadExistente = $ciudadModel->where('nombre_ciudad', $ciudad)->first();
        if (!$ciudadExistente) {
            $data_ciudad = [
                'nombre_ciudad' => $ciudad
            ];
            $ciudadModel->insert($data_ciudad);
            // Obtener el ID de la ciudad recién insertada
            $id_ciudad = $ciudadModel->insertID();
        } else {
            // Obtener el ID de la ciudad existente
            $id_ciudad = $ciudadExistente['id_ciudad'];
        }
    
        // Insertar la dirección en la tabla direcciones
        $data_direccion = [
            'calle' => $direccion,
            'id_ciudad' => $id_ciudad
        ];
        $id_direccion = $direccionModel->insert($data_direccion);
    
        // Crear el array de datos para guardar en la tabla casas
        $data_casa = [
            'nombre_casa' => $nombre_casa,
            'id_direccion' => $id_direccion,
            'id_ciudad' => $id_ciudad
        ];
    
        // Guardar los datos en la base de datos
        if ($model->save($data_casa)) {
            return redirect()->to('/casas');
        } else {
            log_message('error', 'Error al guardar los datos: ' . implode(' ', $model->errors()));
            echo "Error al guardar los datos.";
        }
    }
}
