<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ConsumoModel;
use App\Models\DispositivoModel;

class PanelController extends Controller
{
    public function index()
    {
        $session = session();
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        $consumoModel = new ConsumoModel();
        $dispositivoModel = new DispositivoModel();
        $id_usuario = $session->get('id_usuario');
        
        $data['consumos'] = $consumoModel->where('id_usuario', $id_usuario)->findAll();
        $data['dispositivos'] = $dispositivoModel->findAll();
        
        return view('panel', $data);
    }
}
