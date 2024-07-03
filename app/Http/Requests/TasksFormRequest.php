<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TasksFormRequest extends FormRequest
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
            'dateOfMeasurement' => 'required|date',
            'mk' => 'nullable|boolean',
            'osv' => 'nullable|boolean',
            'sh' => 'nullable|boolean',
            'vent' => 'nullable|boolean',
            'klim' => 'nullable|boolean',
            'f0' => 'nullable|boolean',
            'z' => 'nullable|boolean',
            'm' => 'nullable|boolean',
            'izol' => 'nullable|boolean',
            'dtz' => 'nullable|boolean',
            'wayOfShowingDocumentation'=> 'required|string',
            'certificateNumber'=> 'required|string',
            'certificateDate'=> 'required|string',
            'nextMeasurement'=> 'nullable|date',
            'mkNext' => 'nullable|boolean',
            'osvNext' => 'nullable|boolean',
            'shNext' => 'nullable|boolean',
            'ventNext' => 'nullable|boolean',
            'klimNext' => 'nullable|boolean',
            'f0Next' => 'nullable|boolean',
            'zNext' => 'nullable|boolean',
            'mNext' => 'nullable|boolean',
            'izolNext' => 'nullable|boolean',
            'dtzNext' => 'nullable|boolean',
            "invoice" => 'required | string',
            "invoice_date" => 'required | date',
            "payment_method" => 'required | string',
            "paid" => 'nullable | boolean',
            "contragent_sum" => 'required | numeric',
            "total_sum" => 'required | numeric',
            'client' => 'required|string',
            'client_address_1' => 'required|string',
            'client_address_2' => 'nullable|string',
            'client_address_3' => 'nullable|string',
            'client_address_4' => 'nullable|string',
            'contragent' => 'required|string',
            "price_without_vat" => 'required | numeric',
        ];

    }
}
