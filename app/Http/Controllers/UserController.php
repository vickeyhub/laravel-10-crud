<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\LimitRule;

class UserController extends Controller
{
    public function UserList()
    {
        return view('index');
    }

    public function createuser()
    {
        return view('createUser');
    }

    public function createNewUser(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'mobileNumber' => ['required','numeric', new LimitRule],
            'email' => 'required|email',
            'password' => 'required',
            'confirmPassword' => 'required',
        ],
        [
            'mobileNumber.required' => 'mobile number digits me chahiye mere ko'
        ]);
    }
}
