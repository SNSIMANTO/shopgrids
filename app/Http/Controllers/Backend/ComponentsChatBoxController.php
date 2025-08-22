<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsChatBoxController extends Controller
{
     public function index(){
        return view('backend.components-chat-box');
    }
}
