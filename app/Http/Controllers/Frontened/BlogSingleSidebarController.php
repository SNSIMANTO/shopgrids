<?php

namespace App\Http\Controllers\Frontened;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogSingleSidebarController extends Controller
{
     public function index(){
        return view('frontened.blog-single-sidebar');

    }
}
