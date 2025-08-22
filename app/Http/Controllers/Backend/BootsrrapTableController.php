<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BootsrrapTableController extends Controller
{
     public function index(){
        return view('backend.bootstrap-table');
    }
}
