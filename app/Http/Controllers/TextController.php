<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TextController extends Controller
{
    public function welcome() 
    {
    	$products=Product::paginate(9);
    	
    	return view('welcome')->with(compact('products'));
    	
		//return view('welcome')->with('Products', $products);
    }
}