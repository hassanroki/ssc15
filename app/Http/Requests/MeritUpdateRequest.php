<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MeritUpdateRequest extends FormRequest
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
            // Form Validation
            'name'                => 'required|max:255',
            'fatherName'          => 'required|max:255',
            'motherName'          => 'required|max:255',
            'genderId'            => 'required|max:255',
            'address'             => 'required|max:255',
            'schoolId'            => 'required|exists:institutes,id',
            'semesterId'          => 'required|max:255',
            'photo'               => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:512|dimensions:min_width=300,min_height=300,max_width=300,max_height=300',
        ];
    }

    public function message(){
        return [
            'name.required'         => 'Name field must be required',
            'fatherName.required'   => 'Father Name field must be required',
            'motherName.required'   => 'Mother Name field must be required',
            'genderId.required'     => 'Gender Select must be required',
            'address.required'      => 'Address field must be required',
            'schoolId.required'     => 'School Select must be required',
            'semesterId.required'   => 'Class Select must be required',
        ];
    }
}
