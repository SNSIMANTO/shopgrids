<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootsrrapTypographyController extends Controller
{
     public function index(){
        return view('backend.bootstrap-typography');
    }
}
