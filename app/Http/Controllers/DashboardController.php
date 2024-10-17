<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct(Request $request)
    // {
    //     if(strlen($request->session()->get('name') == 0)){
    //         // echo 'Belum login'; die;
    //         redirect('/')->send();
    //     }   
    // }

    public function index()
    {
        return view('dashboard.index', ['title' => "Dashboard"]);
    }
}
