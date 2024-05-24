<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBranchRequest extends FormRequest
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
            'code' => 'required|unique:Branches,code',
            'address' => 'required',
            'city'=>'required',
            'postalCode'=>'required'
        ];
    }

    public function messages() {

        return [
            'code.required' => "E' obbligatorio inserire un codice",
            'code.unique' => "Attenzione il codice deve essere univoco",
            'address' => "E' obbligatorio inserire un indirizzo",
            'city.required' => "E' obbligatorio inserire la città",
            'postalCode.required' => "E' obbligatorio inserire il CAP",
        ];
    }
}
