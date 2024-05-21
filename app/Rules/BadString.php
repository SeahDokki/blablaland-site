<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class BadString implements Rule
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
    public function passes($attribute, $value): bool
    {
        // Récupérer tous les mots de la table bad_strings
        $result = \App\Models\BadString::pluck('query')->toArray();
        foreach ($result as $item) {
            if (str_contains(strtolower($value), strtolower($item))) {
                $this->forbiddenQuery = $item;
                return false;
            }
        }

        return true;
    }

    public function message()
    {
        return 'Le mot "' . $this->forbiddenQuery . '" est interdit.';
    }
}
