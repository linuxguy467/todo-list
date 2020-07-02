<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home()
    {
        if(auth()->user() && auth()->user()->exists) {
            return redirect()->route('app.dashboard');
        }
        return view('welcome');
    }
}
