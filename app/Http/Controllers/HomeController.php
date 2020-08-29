<?php

namespace App\Http\Controllers;
use App\Analytic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {

        $visitantes = Analytic::where('created_at', date('Y-m-d'))->first();

        if (empty($visitantes))
        {
            Analytic::create([
              'visitas'=> 1,
            ]);
        }

        else
        {
            $visitantes->visitas +=1;
            $visitantes->save();
        }

        $visitantes = Analytic::where('created_at', date('Y-m-d'))->first();

        return View("home")->with('visitantes', $visitantes);
    }
}
