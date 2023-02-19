<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Se escribiran una serie de metos que administraran nuestras rutas
    // Como asignar la rura al controlador
    public function __invoke(){// __invoke() administra una sola ruta
        return view('home');
    }
}
