<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuxiliaryGroupStoreRequest extends FormRequest
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
            'name' => 'required|max:120|unique:auxiliary_groups,name',
            'descriptions' => 'max:255'
        ];
    }

    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'data' => $validator->errors()], 422));
    }
}
