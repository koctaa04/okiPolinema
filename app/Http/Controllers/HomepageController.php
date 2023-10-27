<?php

namespace App\Http\Controllers;

use App\Models\Okis;
use Illuminate\View\View;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function showIndex(): View
    {
        $dataLt = Okis::where('kategori_oki', 1)->take(2)->get();
        $dataHmj = Okis::where('kategori_oki', 2)->take(3)->get();
        $dataUkm = Okis::where('kategori_oki', 3)->take(4)->get();
        return view('homepage.index', [
            'title' => 'Homepage',
            'dataLt' => $dataLt,
            'dataHmj' => $dataHmj,
            'dataUkm' => $dataUkm
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
        $dataLt = Okis::where('kategori_oki', '1')->get();
        $dataHmj = Okis::where('kategori_oki', '2')->get();
        $dataUkm = Okis::where('kategori_oki', '3')->get();
        return view('homepage.oki', [
            'title' => 'oki',
            'dataLt' => $dataLt,
            'dataHmj' => $dataHmj,
            'dataUkm' => $dataUkm
        ]);
    }
    public function showDetailOki(string $slug): View
    {
        $detailOki = Okis::where('slug', $slug)->join('kategori_okis', 'okis_table.kategori_oki', '=', 'kategori_okis.id')->first();
        $benefits = explode(', ', $detailOki->benefit);
        if (!$detailOki) {
            // Redirect to the dashboard if detailOki is not found.
            dump('Redirect to the dashboard, detailOki is not found.');
        }


        return view('homepage.detailOki', [
            'title' => 'oki',
            'detailOki' => $detailOki,
            'benefits' => $benefits
        ]);
    }
    public function showRegister(): View
    {
        return view('homepage.register', [
            'title' => 'Homepage'
        ]);
    }
    
}
