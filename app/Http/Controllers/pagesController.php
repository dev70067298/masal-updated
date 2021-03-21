<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    //redirect to register page
    public function register()
    {
        return view('pages.register');
    }

     //redirect to Login page
     public function login()
     {
         return view('pages.login');
     }
}
