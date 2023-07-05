<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class BirthYearRule implements Rule
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
      

        return  ($value >= 1980-01-01 && $value <= date('Y-m-d'));
        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The :attribute must be between 1980 to ".date('Y-m-d').".";
    }
}
