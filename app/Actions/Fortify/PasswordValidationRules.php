<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array<int, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    protected function passwordRules(): array
    {
        return ['required', 'string', 'confirmed',(new Password)->length(7),
            (new Password)->length(7)->requireUppercase(),(new Password)->length(7)->requireNumeric()
        ];
    }
}
