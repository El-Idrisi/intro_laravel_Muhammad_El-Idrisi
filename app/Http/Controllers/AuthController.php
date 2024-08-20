<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function welcome(Request $request)
{
    $first_name = $request->query('first_name');
    $last_name = $request->query('last_name');
    $national = $request->query('national');
    $bio = $request->query('bio');

    return view('/welcome', [
        'first_name' => $first_name,
        'last_name' => $last_name,
        'national' => $national,
        'bio' => $bio,
    ]);
}
}