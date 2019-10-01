<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function show(){
      return view('users')
      ->with('name','monnaphon')
      ->with('title','Laravel tutorial');
  }
}
