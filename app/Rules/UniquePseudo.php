<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UniquePseudo implements Rule
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
        $authorize = true;
        $user      = Auth::user();

         //Count users where value pseudo
         $query = DB::table('players')
         ->where('pseudo', $value)
         ->where('id', '!=', $user ? $user->id : 0)
         ->count();

         $count = DB::table('users')
         ->where('username', $value)
         ->where('id', '!=', $user ? $user->id : 0)
         ->count();


        if (($count > 0 || $query > 0) && !$user) {
            $authorize = false;
        } else if ($count > 0 && $value != $user->username) {
            $authorize = false;
        } else if ($query > 0 && $value != $user->pseudo) {
            $authorize = false;
        }

        return $authorize;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'Ce pseudo n\'est pas disponible';
    }
}
