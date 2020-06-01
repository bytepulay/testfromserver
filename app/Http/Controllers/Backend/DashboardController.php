<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;

class DashboardController extends Controller
{
    //

    public function index()
    {	
    
       
        return view('dashboard');
    }

   
}
