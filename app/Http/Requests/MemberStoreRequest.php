<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class MemberStoreRequest extends FormRequest
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
            'first_name' => 'required|max:120',
            'last_name' => 'required|max:120',
            'middle_name' => 'required|max:120',
            'birthdate' => 'required|date',
            'address' => 'required|max:255',
            'city' => 'required|max:120',
            'contact_no' => 'required|max:30',
            'leader_id' => 'nullable|exists:members,id',
            'invited_by' => 'nullable|exists:members,id',
            'school_status_id' => 'nullable|exists:school_statuses,id',
            'leadership_level_id' => 'nullable|exists:leadership_levels,id',
            'auxiliary_group_id' => 'nullable|exists:auxiliary_groups,id',
            'status_id' => 'nullable|exists:statuses,id',
            'category_id' => 'nullable|exists:member_categories,id'
        ];
    }


    protected function failedValidation(Validator $validator) {
        throw new HttpResponseException(response()->json(['success' => false, 'data' => $validator->errors()], 422));
    }
}
