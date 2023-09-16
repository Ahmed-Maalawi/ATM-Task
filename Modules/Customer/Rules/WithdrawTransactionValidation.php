<?php

namespace Modules\Customer\Rules;

use Illuminate\Contracts\Validation\Rule;

class WithdrawTransactionValidation implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $type = request()->input('type');
        $amount = request()->input('amount');

        if ($type === 'withdraw'){
            return (1 <= $amount && $amount<= 1000);
        }

        return $amount > 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'When type is "withdraw," the amount must be less than or equal to 1000.';
    }
}
