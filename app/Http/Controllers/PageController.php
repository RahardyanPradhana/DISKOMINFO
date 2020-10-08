<?php

namespace App\Http\Controllers;
use App\Models\citizen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    Public function index(){
        $penduduk = citizen::all();

        return view('index', ['penduduk' => $penduduk]);
    }

    Public function datapenduduk(){
        return view ('datapenduduk');
    }
    
    Public function bantuan(){
        return view ('bantuan');
    }
    
    Public function pengaduan(){
        return view ('pengaduan');
    }
    Public function parameter(){
        return view ('parameter');
    }
    Public function grafik(){
        return view ('grafik');
    }

}
