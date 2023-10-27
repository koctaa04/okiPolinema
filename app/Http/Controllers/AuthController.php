<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    
    protected $redirectTo = '/dashboard'; // Redirect to the dashboard after login.

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('dashboard.login');
    }

    public function redirectTo()
    {
        return $this->redirectTo;
    }
}
