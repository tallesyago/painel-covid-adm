<?php

namespace App\Controllers\Ajax;

use App\Models\CasosModel;
use CodeIgniter\Controller;


class Casos extends Controller
{
    #http://localhost:8080/ajax/casos/getdados
    public function getDados()
    {
        $model = new CasosModel();
        $model->select("idCaso, idMunicipio, confirmadosCaso, suspeitosCaso, obitosCaso, descartadosCaso, recuperadosCaso, created_at");
        $model->where("idUsuario", session()->get('id'));
        $casos = $model->findAll();
        $i = 0;
        $data = array();
        foreach ($casos as $caso) {
            $data[$i]['id'] = $caso['idCaso'];
            $data[$i]['datax'] = $caso['created_at'];
            $data[$i]['confirmados'] = $caso['confirmadosCaso'];
            $data[$i]['suspeitos'] = $caso['suspeitosCaso'];
            $data[$i]['obitos'] = $caso['obitosCaso'];
            $data[$i]['descartados'] = $caso['descartadosCaso'];
            $data[$i]['recuperados'] = $caso['recuperadosCaso'];
            $i++;
        }
        $casos = [
            'data' => $data
        ];

        echo json_encode($casos);
    }
}
