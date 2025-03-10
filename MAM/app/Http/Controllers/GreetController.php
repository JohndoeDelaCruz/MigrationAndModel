<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function greet()
    {
        return view('greet');  // This will return the greet.blade.php view
    }
}