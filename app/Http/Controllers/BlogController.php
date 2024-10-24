<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function berita(){
        return view('berita.beritadepan');
    }
}
