<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function lantai()
    {
        return view('lantai');
    }

    public function lantai2()
    {
        return view('lantai2');
    }

    public function lantai3()
    {
        return view('lantai3');
    }

    public function lantai4()
    {
        return view('lantai4');
    }

    public function lantai5()
    {
        return view('lantai5');
    }

    public function utama()
    {
        return view('utama');
    }

    public function index1()
    {
        return view('index');
    }

    public function display()
    {
        return view('antrianUtama');
    }

    public function monitor()
    {
        return view('monitor');
    }

}
