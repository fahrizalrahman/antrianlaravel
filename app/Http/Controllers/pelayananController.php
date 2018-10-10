<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use DB;
use Auth;

class pelayananController extends Controller{

	public function total_antrian(Request $Request){
		if(Auth::check()){
			$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				 function() {
				 	$id_loket = DB::table('lokets')
						-> select('id')
						-> where('petugas', '=', Auth::user()->id)
						-> first();
					$total = DB::table('antrians')
						-> whereRaw('id_loket=' . $id_loket->id)
						-> count('id');

                    echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
                    echo "data: " . (string)@$total . "\n\n";
                    ob_flush();
                    flush();
                });
			$response->send();
		}
	}

	public function sisa_antrian(Request $Request){
		if(Auth::check()){
			$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				 function() {
				 	$id_loket = DB::table('lokets')
				 		-> select('id')
				 		-> where('petugas', '=', Auth::user()->id)
				 		-> first();
				 	$sisa = DB::table('antrians')
				 		-> whereRaw('status="antri" and id_loket=' . $id_loket->id)
				 		-> count('id');

                    echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
                    echo "data: " . (string)@$sisa . "\n\n";
                    ob_flush();
                    flush();
                });
			$response->send();
		}
	}

	public function nomor_berikut(Request $Request){
		if(Auth::check()){
			$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				 function() {
				 	$id_loket = DB::table('lokets')
				 		-> select('id')
				 		-> where('petugas', '=', Auth::user()->id)
				 		-> first();
				 	$berikut = DB::table('antrians')
				 		-> select('no_antrian')
				 		-> whereRaw('status="antri" and id_loket=' . $id_loket->id)
				 		-> first();

                    echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
                    echo "data: " . (string)@$berikut->no_antrian . "\n\n";
                    ob_flush();
                    flush();
                });
			$response->send();
		}
	}

	public function nomor_terakhir(Request $Request){
		if(Auth::check()){
			$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				 function() {
				 	$saat_ini = DB::table('pelayanans')
				 		-> select('no_antrian')
				 		-> where(['keterangan'=>'Pemanggilan', 'id_petugas' => Auth()->user()->id])
				 		-> first();
				 	if(is_null(@$saat_ini->no_antrian)){
				 		$sekarang = DB::table('pelayanans')
				 			-> select('no_antrian')
					 		-> where(['keterangan'=>'Diterima', 'id_petugas' => Auth()->user()->id])
					 		-> first();
					 	if(is_null(@$sekarang->no_antrian)){
	                    	echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
    	                	echo "data: " . (string)@$sekarang->no_antrian . "\n\n";
    	            	}else{
    	            		echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
    	                	echo "data: " . (string)@$sekarang->no_antrian . "\n\n";
    	            	}
				 	}else{
				 		echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
	                    echo "data: " . (string)@$saat_ini->no_antrian . "\n\n";
				 	}                
                    ob_flush();
                    flush();
                });
			$response->send();
		}
	}

	public function update_status(Request $request){
		if(Auth::check()){
			if($request->q==='update'){

				$id_loket = DB::table('lokets')
					-> select('id')
					-> where('petugas', '=', Auth::user()->id)
					-> first();

				DB::table('antrians')
					-> where([
						'id_loket'=>$id_loket->id,
						'no_antrian'=>intval($request->id),
						'status'	=> 'antri'
						])
					-> update([
						'status'=>'dipanggil',
						'updated_at'=>now()
					]);

				$dipanggil = DB::table('antrians AS a')
					-> leftJoin('users AS b', 'b.id', '=', 'a.id_user')
					-> select('a.id', 'a.id_loket', 'a.no_antrian', 'a.id_user', 'b.name')
					-> where([
						'a.status'	=> 'dipanggil',
						'a.id_loket'	=> $id_loket->id
					])->first();

				$rowid = (DB::table('pelayanans')->count()) + intval(1);
				DB::table('pelayanans')
					-> insert([
						'rowid'			=> $rowid,
						'id_antrian'	=> $dipanggil->id,
						'no_antrian'	=> $dipanggil->no_antrian,
						'id_petugas'	=> Auth()->user()->id,
						'keterangan'	=> 'Pemanggilan',
						'created_at'	=> now(),
						'updated_at'	=> now()
					]);
				return '0';
			}elseif($request->q==='lewati'){
				$id_loket = DB::table('lokets')
					-> select('id')
					-> where('petugas', '=', Auth::user()->id)
					-> first();

				DB::table('antrians')
					-> where([
						'id_loket'	=> $id_loket->id,
						'no_antrian'=> $request->data,
						'status'	=> 'dipanggil'
						])
					-> update([
						'status'=>'lewati',
						'updated_at'=>now()
					]);

				DB::table('pelayanans')
					-> where([
						'id_petugas'	=> Auth()->user()->id,
						'no_antrian'	=> $request->data,
						'keterangan'	=> 'Pemanggilan'
						])
					-> update([
						'keterangan'=>'Lewati',
						'updated_at'=>now()
					]);
					
				return '0';
			}elseif($request->q==='terima'){
				$id_loket = DB::table('lokets')
					-> select('id')
					-> where('petugas', '=', Auth::user()->id)
					-> first();

				DB::table('antrians')
					-> where([
						'id_loket'	=> $id_loket->id,
						'no_antrian'=> $request->data,
						'status'	=> 'dipanggil'
						])
					-> update([
						'status'=>'diterima',
						'updated_at'=>now()
					]);

				DB::table('pelayanans')
					-> where([
						'id_petugas'	=> Auth()->user()->id,
						'no_antrian'	=> $request->data,
						'keterangan'	=> 'Pemanggilan'
						])
					-> update([
						'keterangan'=>'Diterima',
						'mulai'			=> now(),
						'updated_at'=>now()
					]);
					
				return '0';
			}elseif($request->q==='selesai'){
				$id_loket = DB::table('lokets')
					-> select('id')
					-> where('petugas', '=', Auth::user()->id)
					-> first();

				DB::table('antrians')
					-> where([
						'id_loket'	=> $id_loket->id,
						'no_antrian'=> $request->data,
						'status'	=> 'diterima'
						])
					-> update([
						'status'=>'selesai',
						'updated_at'=>now()
					]);

				DB::table('pelayanans')
					-> where([
						'id_petugas'	=> Auth()->user()->id,
						'no_antrian'	=> $request->data,
						'keterangan'	=> 'Diterima'
						])
					-> update([
						'keterangan'=>'selesai',
						'selesai'	=> now(),
						'updated_at'=>now()
					]);
					
				return '0';
			}
		}else{
			return '404. Page Not Found!';
		}
	}

	public function terbilang($bilangan){
		$angka = array('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0',
        '0', '0', '0');
        $kata = array('', 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam', 'tujuh',
        'delapan', 'sembilan');
        $tingkat = array('', 'ribu', 'juta', 'milyar', 'triliun');
        $panjang_bilangan = strlen($bilangan);
        if ($panjang_bilangan > 15){
        	$kalimat = "Diluar Batas";
        	return $kalimat;
        }

        for ($i = 1; $i <= $panjang_bilangan; $i++){
        	$angka[$i] = substr($bilangan, -($i), 1);
        }
        $i = 1;
        $j = 0;
        $kalimat = "";
        while ($i <= $panjang_bilangan){
        	$subkalimat = "";
        	$kata1 = "";
        	$kata2 = "";
        	$kata3 = "";
        	if ($angka[$i + 2] != "0"){
        		if ($angka[$i + 2] == "1"){
        			$kata1 = "seratus";
        		}else{
        			$kata1 = $kata[$angka[$i + 2]] . " ratus";
        		}
        	}

        	if ($angka[$i + 1] != "0"){
        		if ($angka[$i + 1] == "1"){
        			if ($angka[$i] == "0"){
        				$kata2 = "sepuluh";
        			}elseif ($angka[$i] == "1"){
        				$kata2 = "sebelas";
        			}else{
        				$kata2 = $kata[$angka[$i]] . " belas";
        			}
        		}else{
        			$kata2 = $kata[$angka[$i + 1]] . " puluh";
        		}
        	}

        	if ($angka[$i] != "0"){
        		if ($angka[$i + 1] != "1"){
        			$kata3 = $kata[$angka[$i]];
        		}
        	}

        	if (($angka[$i] != "0") or ($angka[$i + 1] != "0") or ($angka[$i + 2] != "0")){
        		$subkalimat = "$kata1 $kata2 $kata3 " . $tingkat[$j] . " ";
        	}

        	$kalimat = $subkalimat . $kalimat;
        	$i = $i + 3;
        	$j = $j + 1;
        }

        if (($angka[5] == "0") and ($angka[6] == "0")){
        	$kalimat = str_replace("satu ribu", "seribu", $kalimat);
        }
        return trim($kalimat);
    }


	public function konversi(Request $request){
		if(Auth::check()){
			if($request!==''){
				$_loket = DB::table('lokets')
					-> selectRaw('substr(kode,7) AS loket')
					-> where('petugas', '=', Auth()->user()->id)
					-> first();
				if($request->jenis==='baru'){
					$_hasil = $this->terbilang(intval($request->q)) . ' silahkan-menuju-loket ' . $this->terbilang(intval($_loket->loket));
					return $_hasil;
				}elseif($request->jenis==='ulang'){
					$_hasil = $this->terbilang(intval($request->q)) . ' silahkan-menuju-loket ' . $this->terbilang(intval($_loket->loket));
					return $_hasil;
				}
			}else{
				return 'Angka kosong!';
			}
		}
	}

	public function check_status(Request $request){
		if(Auth::check()){
			$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$saat_ini = DB::table('pelayanans')
				 		-> select('no_antrian')
				 		-> where(['keterangan'=>'Diterima', 'id_petugas' => Auth()->user()->id])
				 		-> first();
				 	if(is_null(@$saat_ini->no_antrian)){
						echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
						echo "data: " . @$saat_ini->no_antrian . "\n\n";
					}else{
						echo "retry: 1000\n\n"; // no retry would default to 3 seconds.
						echo "data: a\n\n";
					}
					ob_flush();
					flush();
				});
			$response->send();
		}
	}

}
