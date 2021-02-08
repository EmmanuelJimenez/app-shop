<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //metodo welcome que  devuelve la vista welcome
    public function welcome()
    {   
        
        return view('welcome');
    }
}