<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //Convenciones para metodos
    public function index(){// metodo de mostrar paqina principal
        $cursos = Curso::paginate(); // Coleccion de datos
        return view('cursos.index',compact('cursos'));
    }

    public function create(){// metodo de crear un formulario
        return view('cursos.create');
    }

    public function show($curso){// metodo de mostrar algo en particular
        //return view('cursos.show',['curso'=>$curso]) ;
        return view('cursos.show',compact('curso')) ; // compact() devuelve un array ['couso'=>$curso]
    }
}
