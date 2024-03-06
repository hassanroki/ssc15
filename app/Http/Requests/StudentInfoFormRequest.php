<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentInfoFormRequest extends FormRequest
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
            'roll'          => 'required|unique:student_infos|max:255',
            'studentName'   => 'required|max:255',
            'fatherName'    => 'required|max:255',
            'motherName'    => 'required|max:255'
        ];
    }

    public function messages()
    {
        return [
            'roll.required'             => 'Roll filed must be required!',
            'roll.unique'               => 'Already Exits, Try to Another',
            'studentName.required'      => 'Student Name filed must be required!',
            'fatherName.required'       => 'Father Name filed must be required!',
            'motherName.required'       => 'Mother Name filed must be required!',
        ];
    }
}
