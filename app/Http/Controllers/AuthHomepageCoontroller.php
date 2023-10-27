<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthHomepageCoontroller extends Controller
{
    public function showLoginForm()
    {
        return view('homepage.login', [
            'title' => 'Homepage'
        ]);
    }
}
