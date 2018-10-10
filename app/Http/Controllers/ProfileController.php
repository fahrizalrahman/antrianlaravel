<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Antrian;
use App\Loket;
use Auth;
use File;
use DB;
use Intervention\Image\ImageManagerStatic as Image;

class ProfileController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function editProfile(){
        $data_user = User::select()->where('id',Auth::user()->id)->first();
       return view('pelanggan.profile',['data_user' => $data_user]);
    }

    public function monitorTiket(){
        $data_monitor_tiket = Antrian::select('antrians.id AS id','antrians.id_loket','lokets.nama_layanan', 'lokets.kode', 'lokets.lantai', 'antrians.no_antrian')->leftJoin('lokets', 'lokets.id', '=', 'antrians.id_loket')->where(DB::raw('DATE(antrians.created_at)'), '=', DB::raw('curdate()'))->where('antrians.id_user',Auth::user()->id)->orderBy('id','desc');  
        

        return view('pelanggan.monitor',['monitor_tiket' => $data_monitor_tiket]);
    }


     public function lihatTiket($id)
    {
        # code...
            $data_monitor_tiket = Antrian::select()->where('id',$id);

            $data_loket = Loket::select()->where('id',$data_monitor_tiket->first()->id_loket)->first();

            return view('cetak.antrian',['data_antri' => $data_monitor_tiket->first(),'data_loket'=>$data_loket]);
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
        $this->validate($request, [
                'name'  => 'required|string',
                'email' => 'required|unique:users,email,'. $id,
                'nik' => 'unique:users,nik,'. $id,
                'no_telp'=>'required|unique:users,no_telp,'. $id,

        ]);


        $update_user = User::find($id);
        $update_user->update([
            'name'      => $request->name,
            'email'     => $request->email,
            'nik'       => $request->nik,
            'no_telp'   => $request->no_telp,
            'alamat'    => $request->alamat,
        ]);


        if ($request->hasFile('foto')) {
                // Mengambil file yang diupload
                $foto          = $request->file('foto');
                $uploaded_foto = $foto;
                // mengambil extension file
                $extension = $uploaded_foto->getClientOriginalExtension();
                // membuat nama file random berikut extension
                $filename     = str_random(40) . '.' . $extension;
                $image_resize = Image::make($foto->getRealPath());
                $image_resize->fit(200);
                $image_resize->save(public_path('foto_user/' . $filename));
                // hapus foto_home lama, jika ada
                if ($update_user->foto) {
                    $old_foto = $update_user->foto;
                    $filepath = public_path() . DIRECTORY_SEPARATOR . 'foto_user'
                    . DIRECTORY_SEPARATOR . $update_user->foto;
                    try {
                        File::delete($filepath);
                    } catch (FileNotFoundException $e) {
                        // File sudah dihapus/tidak ada
                    }
                }
                $update_user->foto = $filename;
                $update_user->save();
            }


       return view('home_pelanggan');        
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

    public function pilih_sublayanan(){
        
    }
}
