<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContragentsFormRequest extends FormRequest
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
            'contragent_name'=>[
                'required',
                'string'
            ],
            'contragent_company_identifier' => [
                'required',
                'string',
                'max:15'
            ],
            'contragent_contact_person' => [
                'required',
                'string'
            ],
            'contragent_phone_number' => [
                'required',
                'string',
                'max:10'
            ],
            'contragent_additional_information' => [
                'nullable',
            ],
            'commission_percentage' => [
                'required',
                'integer'
            ]
        ];
    }
}
