<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    //
    public function index()
    {
        Session::put('name','admin');
        return view('home.index');
    }
    public function wellcome()
    {
        return view('welcome');
    }
}
