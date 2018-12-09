<?php

namespace flashmail\Http\Requests;

use flashmail\Http\Requests\Request;

class RegistroRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombres' => 'required|alpha|max:20',
            'apellidos' => 'required|alpha|max:20',
            'correo' => 'required|email|max:40',
            'fechaNacimiento' => 'required|before:-18 years',
            'direccion' => 'required|max:100',
            'estado' => 'required|alpha|max:20',
            'ciudad' => 'required|alpha|max:20',
            'codigoPostal' => 'required|max:20',
            'contraseña' => array(
                'required',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,20}$/',
                'confirmed'
            ),
            'contraseña_confirmation' => 'required'

        ];
    }
}
