<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function home()
    {
        if (Auth::check()) {
            return redirect()->route('app.dashboard');
        }
        return view('welcome');
    }
}
