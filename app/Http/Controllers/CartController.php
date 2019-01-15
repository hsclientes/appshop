<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function update()
    {
    	$cart = auth()->user()->cart;
    	$cart->status = 'Pending';
    	$cart->save(); //update
    	$notification="Tu pedido se ha registrado correctamente. Te contactaremos pronto via mail! ";
    	return back()->with(compact('notification'));
    }
}
