<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsArticleController extends Controller
{
     public function index(){
        return view('backend.components-article');
    }
}
