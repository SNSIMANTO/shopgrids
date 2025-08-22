<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootsrrapNavController extends Controller
{
     public function index(){
        return view('backend.bootstrap-nav');
    }
}
