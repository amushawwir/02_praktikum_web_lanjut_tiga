<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($id){
        return "Selamat Datang di Halaman Berita ".$id;
    }
}
