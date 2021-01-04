<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $pertama = array("satu, dua");
        $kedua = array("tiga, empat");
        $ketiga = $pertama + $kedua;
        
        $a=array("red","green");
        array_push($a,"blue","yellow");
        return $a;
    }
}
