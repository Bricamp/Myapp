<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    //

use AuthenticatesUsers;

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8']
        ]);

        $userData = array(
            'email' => $request['email'],
            'password' => $request['password']
        );

        if(Auth::attempt($userData))
        {
            return redirect('/');
        }

        else
        {
            return back()->with('error', 'Usuario o contraseña incorrecta');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
