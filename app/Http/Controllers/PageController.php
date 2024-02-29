<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }

    public function about(){
        return "Hilmi Irfan Naafi'udin / 2241720196";
    }

    public function articles($id){
        return 'Halaman Artikel dengan ID '.$id;
    }
}
