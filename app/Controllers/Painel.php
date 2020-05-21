<?php

namespace App\Controllers;

class Painel extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('login/painel', $data);
	}

}
