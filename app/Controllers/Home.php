<?php

namespace App\Controllers;

use App\Models\CasosModel;

class Home extends BaseController
{
	public function index()
	{
		return view('/home/view');
	}
	public function dados($id = null)
	{
		$model = new CasosModel($id);
		echo "o id eh ". $id . "<br>";
		echo $model->getIdMunicipio();
		$data['casos'] = $model->getCityCases();
		
		var_dump($data['casos']);
		var_dump($data);

		return view('/home/dados', $data);
	}
}
