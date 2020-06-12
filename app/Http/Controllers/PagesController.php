<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */

    public function dashboard()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }



}