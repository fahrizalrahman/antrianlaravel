<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Loket;
use Redirect;


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


    public function home(){
        if(Auth::check()){
            if(Auth()->user()->jabatan==='admin'){
                return Redirect::to('/home');
            }else if(Auth()->user()->jabatan==='petugas_loket'){
                return Redirect::to('/home');
            }else if(Auth()->user()->jabatan==='pelanggan'){
                return Redirect::to('/home');
            }else{
                Auth::logout();
            }
        }
    }

    public function index()
    {
        if (Auth::user()->jabatan == "admin") {
            return view('home');       
         }elseif (Auth::user()->jabatan == "pelanggan"){
            $layanan_loket   = Loket::select()->where('lantai',1);
            $layanan_loket_2 = Loket::select()->where('lantai',2);
            $layanan_loket_3 = Loket::select()->where('lantai',3);
            $layanan_loket_4 = Loket::select()->where('lantai',3);
            $layanan_loket_5 = Loket::select()->where('lantai',5);
            $layanan_loket_6 = Loket::select()->where('lantai',6);
            return view('home_pelanggan', ['layanan_loket' => $layanan_loket,'layanan_loket_2'=>$layanan_loket_2,'layanan_loket_3'=>$layanan_loket_3,'layanan_loket_4'=>$layanan_loket_4,'layanan_loket_5'=>$layanan_loket_5,'layanan_loket_6'=>$layanan_loket_6]);

        }elseif (Auth::user()->jabatan ==="petugas_loket"){
            return view('petugas_loket.home');
        }

        /*}elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 1 ){
            return view('lantai.lantai1'); 
        }elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 2 ){
            return view('lantai.lantai2'); 
        }elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 3 ){
            return view('lantai.lantai3'); 
        }elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 4 ){
            return view('lantai.lantai4'); 
        }elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 5 ){
            return view('lantai.lantai5'); 
        }elseif (Auth::user()->jabatan == "petugas_loket" AND Auth::user()->lantai == 6 ){
            return view('lantai.lantai6'); 
        }*/
        
    }

    public function lantai()
    {
        return view('lantai');
    }


    public function display()
    {
        $layanan_loket   = Loket::select()->where('lantai',1);
        $layanan_loket_2 = Loket::select()->where('lantai',2);
        $layanan_loket_3 = Loket::select()->where('lantai',3);
        $layanan_loket_4 = Loket::select()->where('lantai',3);
        $layanan_loket_5 = Loket::select()->where('lantai',5);
        $layanan_loket_6 = Loket::select()->where('lantai',6);
        return view('home_pelanggan', ['layanan_loket' => $layanan_loket,'layanan_loket_2'=>$layanan_loket_2,'layanan_loket_3'=>$layanan_loket_3,'layanan_loket_4'=>$layanan_loket_4,'layanan_loket_5'=>$layanan_loket_5,'layanan_loket_6'=>$layanan_loket_6]);
    }

    public function monitor()
    {
        return view('monitor');
    }

    public function layanan($lantai)
    {   
        $layanan_lantai = Loket::select()->where('lantai',$lantai)->get();
        return view('pelanggan.layanan',['layanan_lantai' => $layanan_lantai]);
    }

}
