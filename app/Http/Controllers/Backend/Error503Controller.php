<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Error503Controller extends Controller
{
     public function index(){
        return view('backend.errors-503');
    }
}
