<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class pelayananController extends Controller{

	public function total_antrian(Request $Request){
		if(Auth::check()){
			$id_loket = DB::table('lokets')
				-> select('id')
				-> where('petugas', '=', Auth::user()->id)
				-> first();
			$total = DB::table('antrians')
				-> whereRaw('id_loket=' . $id_loket->id)
				-> count('id');
			return $total;
		}
	}

	public function sisa_antrian(Request $Request){
		if(Auth::check()){
			$id_loket = DB::table('lokets')
				-> select('id')
				-> where('petugas', '=', Auth::user()->id)
				-> first();
			$sisa = DB::table('antrians')
				-> whereRaw('status="antri" and id_loket=' . $id_loket->id)
				-> count('id');
			return $sisa;
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
						'no_antrian'=>intval($request->id) + 1
						])
					-> update([
						'status'=>'dipanggil',
						'updated_at'=>now()
					]);
				return '0';
			}elseif($request->q==='lewati'){
				$id_loket = DB::table('lokets')
					-> select('id')
					-> where('petugas', '=', Auth::user()->id)
					-> first();

				DB::table('antrians')
					-> where([
						'id_loket'=>$id_loket->id,
						'no_antrian'=>intval($request->id) + 1
						])
					-> update([
						'status'=>'lewati',
						'updated_at'=>now()
					]);
				return '0';
			}
		}else{
			return '404. Page Not Found!';
		}
	}

	public function nomor_terakhir(Request $Request){
		if(Auth::check()){
			$id_loket = DB::table('lokets')
				-> select('id')
				-> where('petugas', '=', Auth::user()->id)
				-> first();

			$terakhir = DB::table('antrians')
				-> select('no_antrian')
				-> whereRaw('status="dipanggil" and id_loket=' . $id_loket->id)
				-> first();
			if(is_null(@$terakhir->no_antrian)){
				$terakhir = DB::table('antrians')
					-> select('no_antrian')
					-> whereRaw('status="antri" and id_loket=' . $id_loket->id)
					-> orderBy('no_antrian')
					-> first();
				if(is_null(@$terakhir->no_antrian)){
					$terakhir = DB::table('antrians')->count();
					return $terakhir;
				}else{
					return '0';
				}
			}else{
				return $terakhir->no_antrian;
			}
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
				if($request->jenis==='baru'){
					return $this->terbilang(intval($request->q) + 1);
				}elseif($request->jenis==='ulang'){
					return $this->terbilang($request->q);
				}
			}else{
				return 'Angka kosong!';
			}
		}
	}

}
