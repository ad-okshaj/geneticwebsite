<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Request;

class Captcha implements Rule
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
        $response = (new \ReCaptcha\ReCaptcha(config('app.captcha_secret_key')))
            ->verify($value, Request::ip());

        return $response->isSuccess();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Sorry, It looks like you failed the bot test from Google Recaptcha v3. Please try again';
    }
}
