<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // Ignora la cenvencion y administra la tabla indicada
    // protected $table = "users";

    // cuando realizamos ingreso de registors por
    // asigancion masiva, solo se cree con los campos
    // indicados en en array
    //protected $fillable = ['name', 'descripcion', 'categoria'];

    // otra alternativa que permite Laravel es: declarar los
    // capos que no estan permitidos utilizar dentro de este modelo
    //protected $guarded = ['status']
    protected $guarded = []; // podemos provisoriamente de jarlo vacio

    // URL amiglables
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
