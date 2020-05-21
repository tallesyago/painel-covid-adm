<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('/home/view');
	}
	public function dados($id = null)
	{
		$data = [
			'nome' => 'Uba',
			'dia' => 'dasd',
			'mes' => 'dasda',
			'ano' => 'dasdsa',
		];

		return view('/home/dados', $data);
	}
}
