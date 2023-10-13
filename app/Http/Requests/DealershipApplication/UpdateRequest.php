<?php

namespace App\Http\Requests\DealershipApplication;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'bank_id' => 'sometimes|exists:banks,id',
            'dealer_name' => 'sometimes|string',
            'contact_person' => 'sometimes|string',
            'loan_amount' => 'sometimes|numeric',
            'loan_term' => 'sometimes|integer',
            'interest_rate' => 'sometimes|numeric',
            'reason' => 'sometimes|string',
            'status' => 'sometimes|in:new,in_progress,approved,rejected',
        ];
    }
}
