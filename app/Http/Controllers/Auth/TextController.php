<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
    	//$a=5;
    	//$b=10;
    	//$c=$a+$b;
    	//return  ('el resultado de sumar a + b es '.$c);
    	return view ('welcome');
    }
}
