<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function home()
    {
        return view('homep13');
    }

    public function about()
    {
        return view('aboutp13');
    }

    public function contact()
    {
        return view('contactp13');
    } 
}
