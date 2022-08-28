<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class caracteristicaRequest extends FormRequest
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
            
                'nome' => 'required|string|min:3',
                'marca_id' => 'required'
            //
        ];
    }

    public function messages()
    {
        return [

            'nome.required' => 'É obrigatório inserir um nome',
            'marca_id.required' => 'É obrigatório inserir uma marca'
        ];
    }
}
