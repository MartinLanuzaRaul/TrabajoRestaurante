<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosCliente extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'nombre' => 'required|string|max:100' ,
                'telefono' => 'required|regex:/^[6789]\d{8}$/' ,
                'tarjetaCredito' => 'required|string|min:13|max:19' 
        ];
    }

    public function messages(){

        return[
            'nombre.required' => 'El nombre es requerido' ,
            'telefono.required' => 'El telefono es requerido' ,
            'telefono.regex' => 'El numero de telefono parece estar mal escrito' ,
            'tarjetaCredito.required' => 'La tarjeta es requerida'  ,
            'tarjetaCredito.min' => 'El numero de la tarjeta de credito parece estar mal escrito'  ,
            'tarjetaCredito.max' => 'El numero de la tarjeta de credito parece estar mal escrito'  ,
        ];

    }
}
