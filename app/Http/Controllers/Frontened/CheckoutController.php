<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
     public function index(){
    return view('frontened.checkout');
    }
}
