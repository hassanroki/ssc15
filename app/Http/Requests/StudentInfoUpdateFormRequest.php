<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInfoUpdateFormRequest extends FormRequest
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
            //       Form Validation
            'studentName'   => 'required|max:255',
            'fatherName'    => 'required|max:255',
            'motherName'    => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'studentName.required'      => 'Student Name filed must be required!',
            'fatherName.required'       => 'Father Name filed must be required!',
            'motherName.required'       => 'Mother Name filed must be required!',
        ];
    }
}
