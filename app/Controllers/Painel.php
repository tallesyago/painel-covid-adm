<?php

namespace App\Controllers;

class Painel extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('login/painel');
		echo view('templates/footer');
	}

}
