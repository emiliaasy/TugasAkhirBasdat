<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function members()
    {
        return view('members');
    }
}