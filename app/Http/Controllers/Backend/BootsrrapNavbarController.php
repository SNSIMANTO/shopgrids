<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootsrrapNavbarController extends Controller
{
     public function index(){
        return view('backend.bootstrap-navbar');
    }
}
