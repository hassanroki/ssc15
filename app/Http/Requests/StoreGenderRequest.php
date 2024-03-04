<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGenderRequest extends FormRequest
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
            //
            'sex'       => 'required|unique:genders|max:255',
        ];
    }

    public function messages() {
        return [
            'sex.required' => "Gender field must be required!",
            'sex.unique' => "Already Exists! Try Another Gender",
        ];
    }

}
