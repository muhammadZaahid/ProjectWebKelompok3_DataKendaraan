<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function features()
    {
        return view('features',['nama' => 'Muhammad Zaahid']);
    }
    public function pricing()
    {
        $pricing = Pricing::all();
        return view('pricing');
    }
}
