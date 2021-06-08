<?php

namespace App\Controllers;

class Portada extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

    public function listado(){
        return view("listado");
    }

}
