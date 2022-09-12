<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index()
    {
        return view('font.home');
    }

    public  function aboutFn()
    {
        return view('font.about');
    }

    public  function contactFn()
    {
        return view('font.contact');
    }

    public  function loginFn()
    {
        return view('font.login');
    }
}
