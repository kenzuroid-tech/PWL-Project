<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage(){
        return 'Ini adalah halaman Food Beverage';
    }

    public function beautyHealth(){
        return 'Ini adalah halaman Beauty Health';
    }

    public function homeCare(){
        return 'Ini adalah halaman Home Care';
    }

    public function babyKid(){
        return 'Ini adalah halaman Baby Kid';
    }

    public function index(){
        return view('pos.indexCategory');
    }
}

