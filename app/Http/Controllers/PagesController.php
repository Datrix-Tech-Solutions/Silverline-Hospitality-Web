<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('Pages.Home');
    }

    public function about()
    {
        return view('Pages.About');
    }
}
