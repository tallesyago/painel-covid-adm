<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
		$data = [];

		echo view('templates/header', $data);
		echo view('login/dashboard');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
