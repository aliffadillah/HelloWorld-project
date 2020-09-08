<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    // ini tampilan function index
    public function index()
    {
        // echo "<h1>Hello World, Dari Controller !!</h1> " ;
        $nama = "Muhammad Alif Fadillah";
        return view('hello.index', compact('nama'));
    }
}
