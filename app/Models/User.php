<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//Mutadores
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // Incorporar mutadores y accesores en el modelo de la DB
    protected function name():Attribute
    {
        return new Attribute(
            // Accesor
            // get: function($valor){
            //     //al acceder retorne las primeras letras en Mayuscula y no modifican el valor en la DB
            //     return ucwords($valor);
            // },

            // //Mutador
            // set: function($value){
            //     // Pasa todo a minusculas antes de almacenarlo
            //     return strtolower($value);
            // }

            // simplificar lo anterior usando funcion => de PHP
            // Accesor
            get: fn($valor)=>ucwords($valor),//al acceder retorne las primeras letras en Mayuscula y no modifican el valor en la DB
            //Mutador
            set: fn($value)=>strtolower($value)// Pasa todo a minusculas antes de almacenarlo

        );


    }
    // //Accesores en version anteriores a laravel 8
    // public function getNameAttribute($valor){
    //     return ucwords($valor);}
    // //Mutadore en version anteriores a laravel 8
    // public function setNameAttribute($valor){
    //     $this->attributes['name'] = strtolower($valor);

    // }
}
