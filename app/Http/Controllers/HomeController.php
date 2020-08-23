<?php

namespace App\Http\Controllers;
use App\Analytics;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {

        $fecha = date('Y-m-d');
        $visitantes = Analytics::where('date', $fecha)->first();

        if (empty($visitantes))
        {
            Analytics::create([
              'date' => $fecha,
              'visitas'=> 1
            ]);


        }

        else
        {
            $visitantes->date = $fecha;
            $visitantes->visitas +=1;
            $visitantes->save();
        }

        $visitantes = Analytics::where('date', $fecha)->first();

        return View("home")->with('visitantes', $visitantes);
    }
}
