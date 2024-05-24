<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVehicleRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'code' => 'required|unique:Vehicles,code',
            'plate'=> 'required|unique:Vehicles,plate',
            'brand' => 'required',
            'model' => 'required'
        ];
    }

    public function messages() {

        return [
            'code.required' => "E' obbligatorio inserire un codice",
            'code.unique' => "Attenzione il codice deve essere univoco",
            'plate.required' => "E' obbligatorio inserire la targa",
            'plate.unique' => "Attenzione la targa deve essere univoca",
            'brand.required' => "E' obbligatorio inserire la marca",
            'model.required' => "E' obbligatorio inserire il modello",
        ];
    }
}
