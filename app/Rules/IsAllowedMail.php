<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class IsAllowedMail implements Rule
{
    private $emails = [
        'srimani@academicconnect.in'
    ];

    public function __construct()
    {

    }


    public function passes($attribute, $value)
    {
        return in_array($value, $this->emails);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Your email address is not allowed for registration.';
    }
}
