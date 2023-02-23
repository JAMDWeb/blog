<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // sistema de autenticacion de permisos
        // instalar un paquete para manejar los permisos
        // primero valida los permisos despues pasa a las reglas , por eso true
        return true;// se autoriza por default ya qu eno tenemos implentado esto

    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|max:10',
            'descripcion' => 'required|min:10',
            'categoria' => 'required'
        ];
    }

    public function attributes()
    {
        return [ // personalizar los mensajes de validacion
            'name' => 'nombre del curso',
        ];
    }

    public function messages()
    {
        return[
            'descripcion.required' => 'Debe ingresar una descripcion del curso',
        ];
    }
}
