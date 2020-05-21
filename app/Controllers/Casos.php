<?php

namespace App\Controllers;

use App\Models\CasosModel;
use CodeIgniter\Controller;

class Casos extends Controller
{
    public function index()
    {
        $data = [];
        echo view('casos/view');
    }

    public function storeDt()
    {
        $model = new CasosModel();
        $model->save([
            'idCaso' => $this->request->getVar('id'),
            'confirmadosCaso' => $this->request->getVar('confirmados'),
            'suspeitosCaso' => $this->request->getVar('suspeitos'),
            'descartadosCaso' => $this->request->getVar('descartados'),
            'obitosCaso' => $this->request->getVar('obitos'),
            'recuperadosCaso' => $this->request->getVar('recuperados'),
            'dataCaso' => date("Y-m-d"),
            'idUsuario' => session()->get('id')
        ]);
    }

    public function deleteDt($id = null)
    {
        $model = new CasosModel();
        $model->delete($id);
    }
}
