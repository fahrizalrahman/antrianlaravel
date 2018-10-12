<?php

namespace App\Http\Controllers\Monitoring;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use DB;
class monitoring5Controller extends Controller
{
    // Monitoring Layanan Lantai 3

	public function layanan_satu(Request $request){
		$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$lt2 = DB::table('antrians')
						-> select('no_antrian')
						-> whereRaw('(status="dipanggil" or status="diproses" or status="selesai") and id_loket=1')
						-> orderBy('updated_at', 'DESC')
						-> first();

					echo "retry: 2000\n\n"; // no retry would default to 3 seconds.
					echo "data: " . (string)@$lt2->no_antrian . "\n\n";
					ob_flush();
					flush();
				});
			$response->send();
	}

	public function layanan_dua(Request $request){
		$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$lt2 = DB::table('antrians')
						-> select('no_antrian')
						-> whereRaw('(status="dipanggil" or status="diproses") and id_loket=2')
						-> first();

					echo "retry: 2000\n\n"; // no retry would default to 3 seconds.
					echo "data: " . (string)@$lt2->no_antrian . "\n\n";
					ob_flush();
					flush();
				});
			$response->send();
	}

	public function layanan_tiga(Request $request){
		$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$lt2 = DB::table('antrians')
						-> select('no_antrian')
						-> whereRaw('(status="dipanggil" or status="diproses") and id_loket=3')
						-> first();

					echo "retry: 2000\n\n"; // no retry would default to 3 seconds.
					echo "data: " . (string)@$lt2->no_antrian . "\n\n";
					ob_flush();
					flush();
				});
			$response->send();
	}

	public function layanan_empat(Request $request){
		$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$loket = DB::table('antrians')
						-> select('no_antrian')
						-> whereRaw('(status="dipanggil" or status="diproses") and id_loket=4')
						-> first();

					echo "retry: 2000\n\n"; // no retry would default to 3 seconds.
					echo "data: " . (string)@$loket->no_antrian . "\n\n";
					ob_flush();
					flush();
				});
			$response->send();
	}

	public function layanan_aktif(Request $request){
		$response = new StreamedResponse();
			$response->headers->set('Content-Type', 'text/event-stream');
			$response->headers->set('Cache-Control', 'no-cache');
			$response->setCallback(
				function() {
					$aktif = DB::table('antrians')
						-> select('id_loket')
						-> whereRaw('(`status`="dipanggil" or `status`="diproses") and id_loket<=4')
						-> orderBy('updated_at', 'ASC')
						-> first();

					echo "retry: 2000\n\n"; // no retry would default to 3 seconds.
					echo "data: " . (string)@$aktif->no_antrian . "\n\n";
					ob_flush();
					flush();
				});
			$response->send();
	}

}