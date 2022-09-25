<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacadesController extends Controller
{

    public function callStatic($name , $arguments)
    {
//        $service = app()->make('App\Http\Other\FacadesService');
//        return call_user_func_array([$service, $name], $arguments);
        (new \App\Http\Other\FacadesService)->$name(...$arguments);
    }

}
