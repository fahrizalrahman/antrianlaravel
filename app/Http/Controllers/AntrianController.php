<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Loket;
use App\Antrian;
use Auth;
use Session;


class AntrianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function print($id)
    {

        $antrian_terbaru = Antrian::select(['no_antrian'])->where('id_loket',$id)->whereDate('created_at', Carbon::today())->orderBy('id','desc');

        if ($antrian_terbaru->count() > 0) {
            $navActive = true;
            $no_antrian = $antrian_terbaru->first()->no_antrian + intval(1);
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => $no_antrian,
                    'id_user'   => Auth::user()->id,
                ]);

            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();
            
            $this->logout();
            return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
        }else{
            $navActive = true;
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => 1,
                    'id_user'   => Auth::user()->id,
                ]);
           
            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();

            $this->logout();
            return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
        }
    }

    public function logout() {
           Auth::logout();
           return view('auth.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
