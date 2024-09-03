<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function create()
    {
        return view('frontend.checkout');
    }
}
