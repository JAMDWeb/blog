<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
use Psy\CodeCleaner\ReturnTypePass;
use Illuminate\Support\Str;

class CursoController extends Controller
{
    //Convenciones para metodos
    public function index(){// metodo de mostrar paqina principal
        $cursos = Curso::orderBy('id','desc')->paginate(); // Coleccion de datos
        return view('cursos.index',compact('cursos'));
    }

    public function create(){// metodo de crear un formulario
        return view('cursos.create');
    }

    public function store(StoreCurso $request) //
    // public function store(Request $request)
    {
        // Validaciones campos formularios
        // $request->validate([
        //     'name' => 'required|max:10',
        //     'descripcion' => 'required|min:10',
        //     'categoria' => 'required'
        // ]);
        // se pasa a fornulacio de validaciones requests StoreCurso.php

        // $curso = new  Curso();
        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;
        // $curso->save();

        // crear registo por asignacion masiva
        // creanmos un objeto curso y le pasamos un array:
        // $request
        // $curso = Curso::created([
        //     'name' => $request->name,
        //     'descripcion' => $request->descripcion,
        //     'categoria' => $request->categoria
        // ]);
        // Esta linea hace lo mismo que las instrucciones anteriores
        $request->merge([
              'slug' => Str::slug($request->name),
            ]);
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show',$curso);

    }

    public function show(Curso $curso){// metodo de mostrar algo en particular
        //return view('cursos.show',['curso'=>$curso]) ;
        // $curso = Curso::find($id);

        return view('cursos.show',compact('curso')) ; // compact() devuelve un array ['couso'=>$curso]



    }

    public function edit(Curso $curso){ // instancias la clase Curso
        // $curso = Curso::find($id);
        // return $curso;

        // Otra alternativa para recuperar el registro
        // es instanciando la clase del modelo db
        // cullo id sea el que estamos mandando por la url
        // para que quede mas claro id lo renombramos a curso
        return view('cursos.edit',compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        // Validaciones campos formularios
        $request->validate([
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ]);

        // $curso->name = $request->name;
        // $curso->descripcion = $request->descripcion;
        // $curso->categoria = $request->categoria;

        // $curso->save();

        //Actualizar registro por asignacion masiva
        $request->merge([
            'slug' => Str::slug($request->name),
          ]);
        $curso->update($request->all());

        return view('cursos.show',compact('curso')) ;
    }

    public function destroy(Curso $curso){
        $curso->delete();

        return redirect()->route('cursos.index');
    }
}

