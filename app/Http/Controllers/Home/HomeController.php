<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function showHomeForm()
    {
        return view('home.home');
    }

}



