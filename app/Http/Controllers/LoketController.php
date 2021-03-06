<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Loket;
use App\Antrian;
use DB;
use Alert;
use Session;

class LoketController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  
        if (Auth::check()) {
            if(Auth::user()->jabatan==='admin'){
                $loket = Loket::select(
                    'lokets.id AS id',
                     'lokets.nama_layanan',
                     'lokets.kode',
                     'users.name AS petugas',
                     'lokets.lantai', 
                     'lokets.batas_dari_jam',
                     'lokets.batas_sampai_jam',
                     'lokets.batas_antrian'
                 )
                ->leftJoin('users', 'users.id', '=', 'lokets.petugas')
                ->orderBy('id','asc')
                ->orderBy('lantai','asc')
                ->get();  
                return view('loket.index')->with(compact('loket'));
            }elseif(Auth::user()->jabatan==='petugas_loket'){

                $loket = Loket::select('nama_layanan', 'kode', 'lantai')
                    -> where ('petugas', '=', Auth::user()->id)->first();

                return view('petugas_loket.loket')
                    -> with('_loket', $loket);
            }elseif(Auth::user()->jabatan==='pelanggan'){
                return "Pelanggan";
            }
        }else{
                return view('auth.login');
        }

    }

    public function petugas($lantai, $layanan, $loket, Request $request){
        if(Auth::check()){
            $layanan = Loket::select('nama_layanan', 'kode', 'lantai')
                -> where ('petugas', '=', Auth::user()->id)->first();

            $total = Antrian::select('id')
                -> where('id_loket', '=', Auth::user()->lantai)
                -> count();
            $sisa = Antrian::select('id')
                -> where(['id_loket'=>Auth::user()->lantai, 'status'=>'antri'])
                -> count();
            $saat_ini = DB::table('proses_antrians AS a')
                -> leftJoin('antrians AS b', 'b.id', '=', 'a.id_antrian')
                -> select('a.id', 'b.no_antrian')
                -> where([
                    'a.id_petugas'  => Auth::user()->id,
                    'a.status'      => 'proses'])
                -> first();
            $berikut = Antrian::select('no_antrian')
                -> where([
                        'status'    => 'antri',
                        'id_loket'  => Auth::user()->lantai
                    ])
                -> first();
            $data = DB::table('antrians AS a')
                -> leftJoin('users AS b', 'b.id', '=', 'a.id_user')
                -> select('a.no_antrian', 'b.name', 'a.status')
                -> whereRaw('a.status<>"selesai" And a.status<>"lewati" And a.id_loket="' . Auth::user()->lantai . '"')
                -> get();

            return view('loket.index_antrian')
                -> with ('_layanan', $layanan)
                -> with('_total', $total)
                -> with('_sisa', $sisa)
                -> with('_saat_ini', $saat_ini)
                -> with('_berikut', $berikut)
                -> with('_data', $data);
        }else{
            return view('auth.login');
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if (Auth::check()) {
             return  view('loket.create');
        }else{
             return  view('auth.login');
        }
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
             $this->validate($request, [
                'nama_layanan'  => 'required|string',
                'kode' => 'required',
                'lantai' => 'required',
                'kode_antrian'=>'required'
                ]);

  //INSERT MASTER DATA KAS WARUNG, JADI DEFAULT KAS
                $loket = Loket::create([
                    'nama_layanan'  => $request->nama_layanan,
                    'kode'          => $request->kode,
                    'lantai'        => $request->lantai,
                    'petugas'       => $request->petugas,
                    'batas_dari_jam'=> $request->batas_dari_jam,
                    'batas_sampai_jam'=> $request->batas_sampai_jam,
                    'batas_antrian'=> $request->batas_antrian,
                    'kode_antrian'  => $request->kode_antrian
                ]);

          Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Menambah Loket"
            ]);

         return redirect()->route('loket.index');
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
        if (Auth::check()) {
            $loket = Loket::find($id);
            return view('loket.edit')->with(compact('loket'));
        }else{
           return  view('auth.login'); 
        }   
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
        
        $this->validate($request, [
                'nama_layanan'  => 'required|string',
                'kode' => 'required',
                'lantai' => 'required',
                'kode_antrian'=>'required'
        ]);


        $loket = Loket::find($id);
        $loket->update([
            'nama_layanan'      => $request->nama_layanan,
            'kode'              => $request->kode,
            'lantai'            => $request->lantai,
            'petugas'           => $request->petugas,
            'batas_dari_jam'    => $request->batas_dari_jam,
            'batas_sampai_jam'  => $request->batas_sampai_jam,
            'batas_antrian'     => $request->batas_antrian,
            'kode_antrian'      =>$request->kode_antrian
        ]);

        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil Mengubah Loket"
            ]);
            
            return redirect()->route('loket.index'); 

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

        public function delete($id)
    {
        //
           Loket::where('id', $id)->delete();

        Session::flash("flash_notification", [
            "level"=>"danger",
            "message"=>"Berhasil Mengapus Loket"
            ]);
            return redirect()->route('loket.index');
    }
}
