<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // public function index(){
    //     return view('Layout/mainLayout');
    // }

    public function mainPage(){
        return view('pages/mainPage');
    }

    public function departments(){
        return view('pages/departments');
    }
}
