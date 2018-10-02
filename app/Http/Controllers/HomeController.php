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
        $this->middleware('web');
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

    public function lantai1()
    {
        return view('lantai1');
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

    public function lantai6()
    {
        return view('lantai6');
    }

    public function display()
    {
        return view('antrian');
    }

    public function monitor()
    {
        return view('monitor');
    }

    public function layanan()
    {
        return view('layanan');
    }

}
