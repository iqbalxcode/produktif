<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $nama = "Raditya";
        $pelajaran = ["Matematika", "IPA", "Bahasa Indonesia"];
        return view('frontend.home', compact('nama', 'pelajaran'));
    }
}