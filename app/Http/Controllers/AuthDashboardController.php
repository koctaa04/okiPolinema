<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthDashboardController extends Controller
{
    function showLoginForm(){
        return view('dashboard.login');
    }
}
