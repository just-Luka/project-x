<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class UserController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = $model;
    }

    public function registration(Request $request): void
    {
        // 1
        $phoneExists = (new User())->phoneExists($request->get('phone_number'));
        
        // 2
        if(!$phoneExists){

        }
    }

    public function login()
    {
        # code...
    }
}
