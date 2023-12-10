<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\userRequest;

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

    public function createNewUser(userRequest $request)
    {
        dd();
    }
}
