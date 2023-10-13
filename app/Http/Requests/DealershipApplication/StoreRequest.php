<?php

namespace App\Http\Requests\DealershipApplication;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'bank_id' => 'required|exists:banks,id',
            'dealer_name' => 'required|string',
            'contact_person' => 'required|string',
            'loan_amount' => 'required|numeric',
            'loan_term' => 'required|integer',
            'interest_rate' => 'required|numeric',
            'reason' => 'required|string',
            'status' => 'required|in:new,in_progress,approved,rejected',
        ];
    }
}
