<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CampRegisterRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'      => 'required|max:255|string',
            'address'   => 'required|max:255|string',
            'city'      => 'required|max:255|string',
            'state'     => 'required|max:255|string',
            'zip'       => 'required|integer|digits:5',
            'phone'     => 'required|max:255|string',
            'email'     => 'required|max:255|email',
            'child_name'    => 'required|max:255|string',
            'school'        => 'required|max:255|string',
            'age'           => 'required|max:255|string',
            'allergies'     => 'required|max:255|string',
            'emergency_contact' => 'required|max:255|string',
            'emergency_phone'   => 'required|max:255|string',
            'add_persons'       => 'max:255',
        ];
    }
}
