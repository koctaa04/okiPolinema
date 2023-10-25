<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function showIndex(): View
    {
        return view('homepage.index', [
            'title' => 'Homepage'
        ]);
    }
    public function showAbout(): View
    {
        return view('homepage.about', [
            'title' => 'about'
        ]);
    }
    public function showOki(): View
    {
        return view('homepage.oki', [
            'title' => 'oki'
        ]);
    }
    public function showDetailOki(string $id): View
    {
        return view('homepage.detailOki', [
            'title' => 'oki'
        ]);
    }
    public function showRegister(): View
    {
        return view('homepage.register', [
            'title' => 'Homepage'
        ]);
    }
    public function showLogin(): View
    {
        return view('homepage.login', [
            'title' => 'Homepage'
        ]);
    }
}
