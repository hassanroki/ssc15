<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstituteFormRequest extends FormRequest
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
            'instituteName' => 'required|unique:institutes|max:255',
        ];
    }

    public function messages() {
        return [
            'instituteName.required'    => 'Institute Name field must be required',
            'instituteName.unique'      => 'Already Exits, Try to Another Institute Name',
        ];
    }
}
