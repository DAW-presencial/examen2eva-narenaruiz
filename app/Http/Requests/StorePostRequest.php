<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'empresa' => ['required','max:40'],
            'tipoDocumento' => 'required',
            'documentoIdentidad' => 'required',
            'name' => ['required','max:30'],
            'apellido1' => 'required',
            'apellido2' => 'required',
            //pais no es required
            //provincia no es required
            //municipio no es required
            'estado' => 'required',
            'telefono' => 'required',
            'email' => ['required','email'],
            
        ];
    }

    /**
     * Usado para modificar los mensajes de error predeterminados
     * 
     */
    public function messages() {
        return [
            //
        ];
    }

    /**
     * Usado para mmodificar el nombre utilizado en el error
     */
    public function attributes(): array {
        return ['doctype' => "tipo de documento", 'name' => "nombre", 'email' => "correo electrónico",
        'docId' => "documento de identidad", 'apellido1' => "primer apellido", 'apellido2' => "segundo apellido"];
    }
}
