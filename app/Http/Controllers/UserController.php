<?php

namespace App\Http\Controllers;

use Domain\UserManagement\Actions\CreateUser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

    }

    public function store(Request $request)
    {
        $user = (new CreateUser())->fromData($request->validated())->execute();
    }
}
