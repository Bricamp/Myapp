<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dotenv\Validator;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //



    public function checkLogin(Request $request)
    {
        $this->validate($request, [
        "email" => 'required|email',
         "password" => 'required|alphaNum|min:3'
        ]);

        $userData = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($userData))
        {
            return redirect('/index');
        }

        else
        {
            return back()->with('error', 'Usuario o contraseña incorrecta');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
