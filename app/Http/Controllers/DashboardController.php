<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){                 //return bug forum
        return view('dashboard');
    }
}
