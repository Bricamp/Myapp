<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    //

    public function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string']
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
            return redirect()->route('login')->withErrors(['password'=>'Usuario o contraseña incorrecta']);
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
