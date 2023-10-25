<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function showIndex() : View {
        return view('dashboard.index', [
            'title' => 'dashboard'
        ]);
    }

    function showDetailOki(string $id) : View {
        return view('dashboard.detailOki', [
            'title' => $id
        ]);
    }
}
