<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Loket;
use App\Antrian;
use App\SettingHari;
use App\File;
use App\Footer;
use App\Sidebar;
use Storage;
use Redirect;
use DB;
use Jenssegers\Agent\Agent;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

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
        }elseif(Auth::user()->jabatan == "petugas_loket"){
            $layanan = Loket::select()
                -> where('petugas', '=', Auth::user()->id)->first();
            return view('petugas_loket')
                -> with('_layanan', $layanan);
        }elseif (Auth::user()->jabatan == "pelanggan"){
            $agent = new Agent();
            $layanan_loket   = Loket::select()->where('lantai',1);
            $layanan_loket_2 = Loket::select()->where('lantai',2);
            $layanan_loket_3 = Loket::select()->where('lantai',3);
            $layanan_loket_4 = Loket::select()->where('lantai',4);
            $layanan_loket_5 = Loket::select()->where('lantai',5);
            $layanan_loket_6 = Loket::select()->where('lantai',6);
            return view('home_pelanggan', ['layanan_loket' => $layanan_loket,'layanan_loket_2'=>$layanan_loket_2,'layanan_loket_3'=>$layanan_loket_3,'layanan_loket_4'=>$layanan_loket_4,'layanan_loket_5'=>$layanan_loket_5,'layanan_loket_6'=>$layanan_loket_6,'agent'=>$agent]);

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

// Controller Lantai
    public function lantai()
    {
        $lantai1 = Loket::where('lantai','1')->get();
        $bgLantai1 = File::where('lantai','1')->orderby('id','desc');
        $imgFotL1    = Footer::where('lantai','1')->where('float','footer_L')->orderby('id','desc');
        $imgFotR1    = Footer::where('lantai','1')->where('float','footer_R')->orderby('id','desc');
        return view('lantai.lantai1', compact('lantai1','bgLantai1','imgFooter','imgFotL1','imgFotR1'));
    }

    public function lantai2()
    {
        $lantai2 = Loket::where('lantai','2')->get();
        $bgLantai2 = File::where('lantai','2')->orderby('id','desc');
        return view('lantai.lantai2', compact('lantai2','bgLantai2'));
    }

    public function lantai3()
    {
        $lantai3 = Loket::where('lantai','3')->get();
        $bgLantai3 = File::where('lantai','3')->orderby('id','desc');
        return view('lantai.lantai3', compact('lantai3','bgLantai3'));
    }

    public function lantai4()
    {
        $lantai4 = Loket::where('lantai','4')->get();
        $bgLantai4 = File::where('lantai','4')->orderby('id','desc');
        $imgSid4 = Sidebar::where('lantai','4')->orderby('id','desc');
        return view('lantai.lantai4', compact('lantai4','bgLantai4','imgSid4'));
    }

    public function lantai5()
    {
        $lantai5 = Loket::where('lantai','5')->get();
        $bgLantai5 = File::where('lantai','5')->orderby('id','desc');
        $imgSid5 = Sidebar::where('lantai','5')->orderby('id','desc');
        $imgFotL5    = Footer::where('lantai','5')->where('float','footer_L')->orderby('id','desc');
        $imgFotR5    = Footer::where('lantai','5')->where('float','footer_R')->orderby('id','desc');
        return view('lantai.lantai5', compact('lantai5','bgLantai5','imgSid5','imgFotL5','imgFotR5'));
    }

    public function lantai6()
    {
        $lantai6 = Loket::where('lantai','6')->get();
        $bgLantai6 = File::where('lantai','6')->orderby('id','desc');
        $imgFotL6    = Footer::where('lantai','6')->where('float','footer_L')->orderby('id','desc');
        $imgFotR6    = Footer::where('lantai','6')->where('float','footer_R')->orderby('id','desc');
        return view('lantai.lantai6', compact('lantai6','bgLantai6','imgFotL6','imgFotR6'));
    }

    public function display()
    {
        $layanan_loket   = Loket::select()->where('lantai',1);
        $layanan_loket_2 = Loket::select()->where('lantai',2);
        $layanan_loket_3 = Loket::select()->where('lantai',3);
        $layanan_loket_4 = Loket::select()->where('lantai',4);
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
        return view('pelanggan.layanan',['layanan_lantai' => $layanan_lantai,'lantai'=>$lantai]);
    }




}
