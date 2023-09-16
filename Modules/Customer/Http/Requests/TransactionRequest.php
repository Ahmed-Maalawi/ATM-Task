<?php

namespace Modules\Customer\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Modules\Customer\Rules\WithdrawTransactionValidation;

class TransactionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'type' => 'required|in:deposit,withdraw',
            'amount' => ['required','numeric', new WithdrawTransactionValidation],
            'account_id' => ['required', Rule::exists('accounts', 'id')]
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

    public function failedValidation(Validator $validator)
    {
       throw new HttpResponseException(response()->json([
           'success' => false,
           'message' => 'validation error',
           'errors' => $validator->errors()
       ], 422));
    }
}
