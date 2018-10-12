<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Loket;
use App\Antrian;
use App\Sublayanan;
use App\SettingHari;
use App\SettingHariSub;
use Auth;
use Session;
use DB;

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
            $no_antrian = $antrian_terbaru->first()->no_antrian + intval(1);
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => $no_antrian,
                    'id_user'   => Auth::user()->id,
                ]);

            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();
            
            return redirect()->route('monitor-tiket'); 
            //$this->logout(); return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
        }else{
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => 1,
                    'id_user'   => Auth::user()->id,
                ]);
           
            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();

            return redirect()->route('monitor-tiket'); 

//            $this->logout(); return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
        }
    }

        public function printSub($id,$id_sub)
    {

        $antrian_terbaru = Antrian::select(['no_antrian'])->where('id_loket',$id)->whereDate('created_at', Carbon::today())->orderBy('id','desc');

        if ($antrian_terbaru->count() > 0) {
            $no_antrian = $antrian_terbaru->first()->no_antrian + intval(1);
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => $no_antrian,
                    'id_user'   => Auth::user()->id,
                    'id_sublayanan'=> $id_sub
                ]);

            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();
            
            return redirect()->route('monitor-tiket'); 
            //$this->logout(); return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
        }else{
                $create_antrian =  Antrian::create([
                    'id_loket'      => $id,
                    'status'     => "antri",
                    'no_antrian'  => 1,
                    'id_user'   => Auth::user()->id,
                    'id_sublayanan'=> $id_sub
                ]);
           
            $data_loket = Loket::select()->where('id',$create_antrian->id_loket)->first();

            return redirect()->route('monitor-tiket'); 

//            $this->logout(); return view('cetak.antrian',['data_antri' => $create_antrian,'data_loket'=>$data_loket]);
            
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

    public function pilih_sublayanan(Request $request){

            $data_sublayanan = Sublayanan::select()->where('id_loket',$request->id)->get();

            $out_sub = '<ul class="list-group">';
            foreach($data_sublayanan as $data_sublayanans){
               $data_lokets = Loket::select()->where('id',$request->id)->first();
               $out_sub .= $this->foreachlistLayanan($data_sublayanans,$data_lokets);
            }
            $out_sub .=  '</ul>';
            return $out_sub;

    }

    public function foreachlistLayanan($data_sublayanans,$data_lokets)
    {
        $out = '<li class="list-group-item select-sub" data-id-loket="'.$data_lokets->id.'" data-batas-dari-jam="'.$data_sublayanans->batas_dari_jam.'" data-batas-sampai-jam="'.$data_sublayanans->batas_sampai_jam.'" data-batas-antrian="'.$data_sublayanans->batas_antrian.'"  data-id-sublayanan="'.$data_sublayanans->id.'">'.$data_sublayanans->nama_sublayanan.'</li>';

        return $out;
    } 

            public function count_antrian(Request $request)
    {   

        $layanan_lantai = Antrian::select()->where('id_loket',$request->id)
        ->where(DB::raw('DATE(created_at)'), '=', DB::raw('curdate()'))->count();

        return $layanan_lantai;
    }

            public function cekSettingHari(Request $request)
    {   

        $count = SettingHari::select()->where('id_loket',$request->id)
        ->where('hari',$request->hari)->count();

        return $count;
    }


            public function cekSettingHariSub(Request $request)
    {   

        $count = SettingHariSub::select()->where('id_sublayanan',$request->id)
        ->where('hari',$request->hari)->count();

        return $count;
    }



        public function monitorTiket(){
        $data_monitor_tiket = Antrian::select(
            'antrians.id AS id',
            'antrians.id_loket',
            'lokets.nama_layanan',
            'lokets.kode',
            'lokets.lantai',
            'antrians.no_antrian',
            'sublayanans.nama_sublayanan as nama_sublayanan',
            'sublayanans.kode_loket as kode_loket'
          )->leftJoin('lokets', 'lokets.id', '=', 'antrians.id_loket')
           ->leftJoin('sublayanans', 'sublayanans.id', '=', 'antrians.id_sublayanan')
        ->where(DB::raw('DATE(antrians.created_at)'), '=', DB::raw('curdate()'))->where('antrians.id_user',Auth::user()->id)->orderBy('id','desc');  
        

        return view('pelanggan.monitor',['monitor_tiket' => $data_monitor_tiket]);
    }


     public function lihatTiket($id)
    {
        # code...
            $data_monitor_tiket = Antrian::select()->where('id',$id);


            if ($data_monitor_tiket->first()->id_sublayanan == '' OR $data_monitor_tiket->first()->id_sublayanan == null) {
                   
                   $data_loket = Loket::select()->where('id',$data_monitor_tiket->first()->id_loket)->first();
            }else{
                  $data_loket = Sublayanan::select([
                        'sublayanans.nama_sublayanan as nama_layanan',
                        'sublayanans.id as id',
                        'lokets.lantai as lantai',
                        'sublayanans.kode_loket as kode'
                ])
                ->leftjoin('lokets','lokets.id', '=', 'sublayanans.id_loket')
                ->where('sublayanans.id',$data_monitor_tiket->first()->id_sublayanan)
                ->first();
            }


            return view('cetak.antrian',['data_antri' => $data_monitor_tiket->first(),'data_loket'=>$data_loket]);
    }  


}
