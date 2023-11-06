<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaxCalculatorRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "monthly_income" => 'required|numeric|min:1000',
            "pension" => "required",
            "nhf" => "required",
            "nhis" => "nullable|numeric|min:1000",
            "life_insurance" => "nullable|numeric|min:1000",
        ];
    }
}
