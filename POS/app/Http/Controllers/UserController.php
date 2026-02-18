<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $id = 1;
        $name = 'Nisho';

        return view('pos.user', compact('id', 'name'));
    }
}
