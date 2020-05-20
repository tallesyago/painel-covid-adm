<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\NoticiasModel;

class Noticias extends Controller
{
    public function index()
    {
        $data = [];

        echo view('templates/header', $data);
        echo view('noticias/view');
        echo view('templates/footer');
    }

    public function storeDt()
    {
        $model = new NoticiasModel();
        $model->save([
            'idNoticia' => $this->request->getVar('id'),
            'tituloNoticia' => $this->request->getVar('titulo'),
            'conteudoNoticia' => $this->request->getVar('conteudo')
        ]);
    }

    public function deleteDt($id = null)
    {
        $model = new NoticiasModel();
        $model->delete($id);
    }
}
