<?php

namespace App\Controllers;

use App\Models\CasosModel;
use CodeIgniter\Controller;

class Home extends BaseController
{
	public function index()
	{
		return view('/home/view');
	}
	public function dados($id = null)
	{

		$model = new CasosModel(); 
		// echo "o id eh ". $id . "<br>";

		$query = $model->query("Select * FROM casos c, municipios m WHERE c.idMunicipio = '".$id."' AND c.idMunicipio = m.idMunicipio ORDER BY c.idCaso DESC LIMIT 1");
		$data['casos'] = $query->getRowArray();


		// $data['casos'] = 
		// var_dump($data['casos']);
		// var_dump($casos);

		return view('/home/dados', $data);
	}
}
