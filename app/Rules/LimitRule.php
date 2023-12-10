<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class LimitRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        
        if (strlen($value) != 10) {
            // return 'must be 10 digits only.';
            $message = "Mobile Number must be 10 digits only";
            $fail($message);
        }

    }
}
