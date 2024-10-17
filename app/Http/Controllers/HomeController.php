<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home() {
        echo "TPL IPB";
    }

    function b ($x = null) {
        if(empty($x)){
            echo "Bojonggede";
        } else {
            echo $x;
        }
    }

    function c ($who) {
        return view('greeting', ['who' => $who]);
    }

    function d () {
        return view('form');
    }

    function e (Request $request) {
        echo $request->nama;
    }
}
