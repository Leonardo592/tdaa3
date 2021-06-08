<?php

namespace App\Controllers;

class Dash extends BaseController
{
	public function index()
	{
        echo view('portada');
	}
    /*public function portada(){
        echo view('portada');
    }*/
    public function tablero(){
        echo view('tablero');
    }

    public function usuarios(){
        echo view('usuarios');
    }

    public function estadisticas(){
        echo view('estadisticas');
    }

    public function registro(){
        echo view('registro');
    }

}
