<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
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
            "birth_date"=>"date|required",
            "first_name"=>"string|required|min:3",
            "last_name"=>"string|required|min:3",
            "gender"=>["required",Rule::in(['M','F'])],
            "hire_date"=>"date|required"
        ];
    }
}
