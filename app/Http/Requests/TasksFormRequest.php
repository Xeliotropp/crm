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
            'mk' => 'nullable ',
            'osv' => 'nullable ',
            'sh' => 'nullable ',
            'vent' => 'nullable ',
            'klim' => 'nullable ',
            'f0' => 'nullable ',
            'z' => 'nullable ',
            'm' => 'nullable ',
            'izol' => 'nullable ',
            'dtz' => 'nullable ',
            'wayOfShowingDocumentation'=> 'required|string',
            'certificateNumber'=> 'required|string',
            'certificateDate'=> 'required|string',
            'nextMeasurement'=> 'nullable|date',
            'mkNext' => 'nullable ',
            'osvNext' => 'nullable ',
            'shNext' => 'nullable ',
            'ventNext' => 'nullable ',
            'klimNext' => 'nullable ',
            'f0Next' => 'nullable ',
            'zNext' => 'nullable ',
            'mNext' => 'nullable ',
            'izolNext' => 'nullable ',
            'dtzNext' => 'nullable ',
            "invoice" => 'required | string',
            "invoice_date" => 'required | date',
            "payment_method" => 'required | string',
            "paid" => 'nullable',
            "contragent_sum" => 'required | numeric',
            "total_sum" => 'required | numeric',
            'client_id' => 'required|integer',
            'client_address_1' => 'required|string',
            'client_address_2' => 'nullable|string',
            'client_address_3' => 'nullable|string',
            'client_address_4' => 'nullable|string',
            'contragent_id' => 'required|integer',
            "price_without_vat" => 'required | numeric',
        ];

    }
}
