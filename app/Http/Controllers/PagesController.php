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

    public function contact(){
        return view('Pages.Contact');
    }

    public function services(){
        return view('Pages.Services');
    }

    public function team(){
        return view('Pages.Team');
    }

    public function buy(){
        return view('Pages.Food');
    }
}
