<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendpageController extends Controller
{
    //

      public function dashboardfun($value='')
    {
        return view('backend.dashboard');
    }
}
