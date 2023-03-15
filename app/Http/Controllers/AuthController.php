<?php

namespace App\Http\Controllers;

use App\Events\PhoneConfirmation;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(): void {}
    public function register(Request $request): void {

    }
    public function verifyPhone(Request $request): void 
    {
        $request->validate([
            'phone_number' => 'required|digits:9|unique:users',
        ]);

        PhoneConfirmation::dispatch($request->get('phone_number'));
    }
    public function resetPassword(): void {}
}
