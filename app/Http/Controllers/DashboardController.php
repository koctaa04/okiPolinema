<?php

namespace App\Http\Controllers;

use App\Models\KegiatanOkis;
use App\Models\Okis;
use App\Models\PrestasiOkis;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class DashboardController extends Controller
{
    function showIndex() : View {
        return view('dashboard.index', [
            'title' => 'dashboard'
        ]);
    }

    function showDetailOki(string $id) : View {
        $detailOki = Okis::find($id);
        if ($detailOki->kategori_oki == 1) {
            $title = 'detail_lt';
        }else if ($detailOki->kategori_oki == 2) {
            $title = 'detail_hmj';
        }else if ($detailOki->kategori_oki == 3) {
            $title = 'detail_ukm';
        }

        $prestasiData = PrestasiOkis::where('id_oki', $id)->get();
        $kegiatanData = KegiatanOkis::where('id_oki', $id)->get();

        return view('dashboard.detailOki', [
            'title' => $title,
            'detailOki'=> $detailOki,
            'prestasiData' => $prestasiData,
            'kegiatanData' => $kegiatanData
        ]);
    }
}
