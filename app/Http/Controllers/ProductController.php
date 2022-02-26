<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     
    public function product1(){
        return "Halaman Marbel Edu Games";
    }

    public function product2(){
        return "Halaman Marbel and Friends Kids Games";
    }

    public function product3(){
        return "Halaman Riri Story Books";
    }

    public function product4(){
        return "Halaman Kolak Kids Songs";
    }
}
