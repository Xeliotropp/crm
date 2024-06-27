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
            'f-0' => 'nullable|boolean',
            'z' => 'nullable|boolean',
            'm' => 'nullable|boolean',
            'izol' => 'nullable|boolean',
            'dtz' => 'nullable|boolean',
            'wayOfShowingDocumentation'=> 'required|string',
            'certifaciteNumber'=> 'required|string',
            'nextMeasurment'=> 'nullable|date',
            'mkNext' => 'nullable|boolean',
            'osvNext' => 'nullable|boolean',
            'shNext' => 'nullable|boolean',
            'ventNext' => 'nullable|boolean',
            'klimNext' => 'nullable|boolean',
            'f-0Next' => 'nullable|boolean',
            'zNext' => 'nullable|boolean',
            'mNext' => 'nullable|boolean',
            'izolNext' => 'nullable|boolean',
            'dtzNext' => 'nullable|boolean',
        ];

    }
}
