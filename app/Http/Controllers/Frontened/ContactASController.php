<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactASController extends Controller
{
     public function index(){
        return view('frontened.contact');

    }
}
