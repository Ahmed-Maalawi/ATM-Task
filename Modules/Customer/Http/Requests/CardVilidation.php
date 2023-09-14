<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CardVilidation extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'card_number' => ['required', 'regex:/^[0-9\s]{17,}$/', 'string'],
            'pin_number' => ['required', 'numeric', 'min:6'],
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->hasRole('customer');
    }

    public function messages()
    {
        return [
            'card_number.required' => 'The card number field is required.',
            'card_number.numeric' => 'The card number must contain only numbers.',
            'card_number.min' => 'The card number must be at least 14 digits long.',
            'pin_number.required' => 'The PIN number field is required.',
            'pin_number.numeric' => 'The PIN number must contain only numbers.',
            'pin_number.digits' => 'The PIN number must be exactly 6 digits long.'
        ];
    }
}
