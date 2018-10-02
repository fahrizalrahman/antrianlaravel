<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Loket;
use Alert;

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
            $loket = Loket::select('lokets.id AS id', 'lokets.nama_layanan', 'lokets.kode', 'users.name AS petugas', 'lokets.lantai')->leftJoin('users', 'users.id', '=', 'lokets.petugas')->orderBy('id','desc')->get();  

                return view('loket.index')->with(compact('loket'));
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
                'kode' => 'required|unique:lokets',
                'lantai' => 'required',
                'petugas'=>'required|unique:lokets'
                ]);

  //INSERT MASTER DATA KAS WARUNG, JADI DEFAULT KAS
                $loket = Loket::create([
                    'nama_layanan'  => $request->nama_layanan,
                    'kode'          => $request->kode,
                    'lantai'        => $request->lantai,
                    'petugas'       => $request->petugas,
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
        $loket = Loket::find($id);
        return view('loket.edit')->with(compact('loket'));
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
                'kode' => 'required|unique:lokets,kode,'. $id,
                'lantai' => 'required',
                'petugas'=>'required|unique:lokets,petugas,'. $id,
        ]);


        $loket = Loket::find($id);
        if(!$loket->update([
            'nama_layanan'    => $request->nama_layanan,
            'kode'    => $request->kode,
            'lantai'  => $request->lantai,
            'petugas' => $request->petugas,
        ])) 

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
        //
           Loket::where('id', $id)->delete();

            return redirect()->route('loket.index');
    }
}
