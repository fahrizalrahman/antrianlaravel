<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\AddUser;
class UserController extends Controller
{
    public function createUser()
    {
        return view('loket.add');
    }

    public function addPelanggan()
    {
        return view('loket.addPelanggan');
    }

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
     * Get a validator for an incoming registration data.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
         $user =  User::create([
            'name'      => $data['name'],
            'email'     => $data['email'],
            'password'  => Hash::make($data['password']),
            'jabatan'   =>'pelanggan',
            'lantai'    => 0,
            'nik'       =>$data['nik'],
            'alamat'    =>$data['alamat'],
            'no_telp'   =>$data['no_telp'],
            'token'     => str_random(25),
        ]);

        if ($data['foto']) {
                $foto = $data['foto'];

                if (is_array($foto) || is_object($foto)) {
                    // Mengambil file yang diupload
                    $uploaded_foto = $foto;
                    // mengambil extension file
                    $extension = $uploaded_foto->getClientOriginalExtension();
                    // membuat nama file random berikut extension
                    $filename     = str_random(40) . '.' . $extension;
                    $image_resize = Image::make($foto->getRealPath());
                    $image_resize->fit(300);
                    $image_resize->save(public_path('foto_user/' . $filename));
                    $insert_barang->foto = $filename;
                    // menyimpan field foto di table barangs  dengan filename yang baru dibuat
                    $insert_barang->save();
                
                }
        }

        
        return $user;
     }

}
