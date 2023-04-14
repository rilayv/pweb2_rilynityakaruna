<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelayananController extends Controller
{
    function index(){
        return view('tables');
    }

    function form(){
        return view('forms');
    }
}
