<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsFormRequest extends FormRequest
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
            'client' => [
                'required',
                'string'
            ],
            'company_identifier' => [
                'required',
                'string',
                'max:15'
            ],
            'contact_person' => [
                'required',
                'string'
            ],
            'phone_number' => [
                'required',
                'string',
                'max:10'
            ],
            'address' => [
                'required',
                'string'
            ],
            'additional_information' => [
                'nullable',
            ],
            'object_first' => [
                'required',
                'string'
            ],
            'object_second' => [
                'nullable',
                'string'
            ],
            'object_third' => [
                'nullable',
                'string'
            ],
            'object_fourth' => [
                'nullable',
                'string'
            ]
        ];
    }
}
