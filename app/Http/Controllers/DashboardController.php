<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $r)
    {
        return view('dashboard');
    }

    public function logout(Request $r)
    {
       return redirect('/');
    }
}
