<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
     public function index(){
        return view('frontened.product-details');

    }
}
