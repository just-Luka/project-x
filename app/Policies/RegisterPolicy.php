<?php

namespace App\Policies;

use App\Models\User;

class RegisterPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Checks whether phone number is already used or not
     */
    public function phoneNumber(): bool
    {
        // TODO implement policy for number check
        // return UserModel::where('phone_number', $number);
    }
}
