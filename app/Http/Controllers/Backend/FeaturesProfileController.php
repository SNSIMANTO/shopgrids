<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeaturesProfileController extends Controller
{
     public function index(){
        return view('backend.features-profile');
    }
}
