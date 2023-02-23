<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
//Asignar un controlador a las rutas y espeficar cual
use App\Http\Controllers\HomeController;// namespace+nombre archivo

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class );

/* Grupo de rutas que comparte el mismo  controlador (Laravel 9)
Route::controller(CursoController::class)->group(function(){
    Route::get('cursos', 'index' )->name('cursos.index');
    Route::get('cursos/create', 'create')->name('cursos.create');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}','show')->name('crusos.show') ;
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
});

de esta forma laravel armar la lista de rutas (URL)
al tener en cuenta la definicion segun las convenciones
En el caso de queres cambiar el nombre de URL podemos hacer
podemos hacer lo siguiente, agregar ->names() al Route::resource */
//Route::resource('asignaturas', CursoController::class)->parameters(
//    ['asignaturas'=>'curso'])->names('cursos');

Route::resource('cursos', CursoController::class)->names('cursos');


// en el caso que se necesite cambiar verbos de accion en ingles de una URL
// Route::resourceVerbs en el archivo AppServiceProvider.php





/* Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {

    if ($categoria) {
        return "Bienvenido al curso: $curso, de la categoria $categoria";# code...
    } else {
        return "Bienvenido al curso: $curso";
    }


}); */

