<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function test(){
        echo "Test Page";
    }

    public function index(){
        //echo "index";
        return view('home.index');
    }
}
