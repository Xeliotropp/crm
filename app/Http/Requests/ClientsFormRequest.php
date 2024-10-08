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
            'client' => 'required|string',
            'company_identifier' => 'required|string|max:15',
            'vat_number' => 'nullable|string|max:17',
            'contact_person' => 'required|string',
            'email' => 'nullable|string',
            'phone_number' => 'required|string|max:10',
            'address' => 'required|string',
            'contragent_client_id' => 'required|integer',
            'additional_information' => 'nullable|string',
            'objects' => 'required|array',
            'objects.*.object' => 'required|string',
            'objects.*.object_address' => 'nullable|string',
        ];
    }
}
