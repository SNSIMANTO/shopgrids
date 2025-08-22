<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthForgetPasswordController extends Controller
{
     public function index(){
        return view('backend.auth-forgot-password');
    }
}
