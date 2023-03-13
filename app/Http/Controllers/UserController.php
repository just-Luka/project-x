<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Events\PhoneConfirmation;

class UserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function registration(Request $request): void
    {
        
        if($this->model->phoneExists($request->get('phone'))) {
            // In case if phone number is already used
        };
        PhoneConfirmation::dispatch($request->get('phone'));
        // Send Confirmation Number
    }

    public function login()
    {
        # code...
    }
}
