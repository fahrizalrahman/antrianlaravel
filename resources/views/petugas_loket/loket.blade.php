@extends('layouts.app_petugas_loket')

@section('header_script')
<link rel="stylesheet" href="http://antrian.local/plugins/font-awesome/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="http://antrian.local/dist/css/adminlte.min.css">
      <!-- iCheck -->
      <link rel="stylesheet" href="http://antrian.local/plugins/iCheck/flat/blue.css">
      <!-- Morris chart -->
      <link rel="stylesheet" href="http://antrian.local/plugins/morris/morris.css">
      <!-- jvectormap -->
      <link rel="stylesheet" href="http://antrian.local/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
      <!-- Date Picker -->
      <link rel="stylesheet" href="http://antrian.local/plugins/datepicker/datepicker3.css">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="http://antrian.local/plugins/daterangepicker/daterangepicker-bs3.css">
      <!-- bootstrap wysihtml5 - text editor -->
      <link rel="stylesheet" href="http://antrian.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
      <!-- Google Font: Source Sans Pro -->
      <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
             
      <link rel="stylesheet" href="http://antrian.local/plugins/datatables/dataTables.bootstrap4.css">
      {{ Html::script('/custom/js/custom.js') }}
@endsection

@section('content')
	<div class="content-wrapper">
		<section class="content">
			<div class="container-fluid">
				<br />
				<div class="row">
					<div class="col-md-12">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title"><strong>{{ $_loket->nama_layanan }} <br />Lantai. {{ $_loket->kode }}</strong></h3>
								<div class="card-tools">
									<button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
									<button type="button" class="btn btn-tool" data-widget="remove"><i class="fa fa-times"></i></button>
								</div>
							</div>
							<div class="card-body">
								<div class="card-columns">
									<div class="card">
										<label class="lb_total_antri" style="width: 100%; text-align: center; font-size: 80pt">0</label>
										<div class="card-body bg-primary text-center">
											<h4 class="card-title"><strong>TOTAL ANTRIAN</strong></h4>
										</div>
									</div>
									<div class="card">
										<label class="lb_sisa_antri" style="width: 100%; text-align: center; font-size: 80pt">0</label>
										<div class="card-body bg-success text-center">
											<h4 class="card-title"><strong>SISA ANTRIAN</strong></h4>
										</div>
									</div>
									<div class="card">
										<label class="lb_no_terakhir" style="width: 100%; text-align: center; font-size: 80pt">0</label>
										<div class="card-body bg-danger text-center">
											<h4 class="card-title"><strong>NOMOR PANGGILAN</strong></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-6">

						<button type="button" class="id_panggil btn btn-primary btn-lg">
							<span class="fa fa-microphone"></span>
							Panggil
						</button>
						<button type="button" class="id_ulang btn btn-primary btn-lg">
							<span class="fa fa-refresh"></span>
							Panggil Ulang
						</button>
						<button type="button" class="id_lewati btn btn-danger btn-lg">
							<span class="fa fa-fast-forward"></span>
							Lewati
						</button>
							</div>
							<div class="col-md-6 text-right">
						<button type="button" class="id_terima btn btn-primary btn-lg">
							<span class="fa fa-check-square-o"></span>
							Terima
						</button>
						<button type="button" class="id_selesai btn btn-primary btn-lg">
							<span class="fa fa-hourglass-end"></span>
							Selesai
						</button>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<audio id="id_audio" hidden controls>
							Your browser does not support the audio element.
						</audio>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection

@section('footer_script')
<script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
          $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="http://antrian.local/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Morris.js charts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="http://antrian.local/plugins/morris/morris.min.js"></script>
        <!-- Sparkline -->
        <script src="http://antrian.local/plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="http://antrian.local/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="http://antrian.local/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="http://antrian.local/plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
        <script src="http://antrian.local/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="http://antrian.local/plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="http://antrian.local/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- Slimscroll -->
        <script src="http://antrian.local/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="http://antrian.local/plugins/fastclick/fastclick.js"></script>
        <!-- AdminLTE App -->
        <script src="http://antrian.local/plugins/chartjs-old/Chart.min.js"></script>
        <script src="http://antrian.local/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="http://antrian.local/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="http://antrian.local/dist/js/demo.js"></script>

<script type="text/javascript">

function get_data(){
	$.ajax({
		headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		dataType: 'html',
		url		: '/proses/total',
		data 	: 'q=check data',
		success	: function(data){
			$('.lb_total_antri').html('');
			$('.lb_total_antri').html(data);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.responseText);
		}
	});

	$.ajax({
		headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		dataType: 'html',
		url		: '/proses/sisa',
		data 	: 'q=check data',
		success	: function(data){
			$('.lb_sisa_antri').html('');
			$('.lb_sisa_antri').html(data);
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.responseText);
		}
	});

	$.ajax({
		headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		dataType: 'html',
		url		: '/proses/akhir',
		data 	: 'q=check data',
		success	: function(data){
			$('.lb_no_terakhir').html('');
			if(data===''){
				$('.lb_no_terakhir').html('0');
			}else{
				$('.lb_no_terakhir').html(data);
				$('.id_panggil').prop('disabled', false);
			}
		},
		error: function (xhr, ajaxOptions, thrownError) {
			alert(xhr.responseText);
		}
	});

}

$(function(){
	var curPlaying = 1;
	$('#id_audio').bind('ended', function(){
		var audio = document.getElementById('id_audio');
		var lstsongNames = _data.split(',');
		var urls = audio.getElementsByTagName('source');

		if (urls[0].src.indexOf(lstsongNames[lstsongNames.length - 1]) === -1) {
			urls[0].src = '/custom/audio/' + lstsongNames[curPlaying];
		}
		curPlaying++;
    	audio.load();
    	audio.play();
    	if((curPlaying - 1) === lstsongNames.length){
			audio.pause();
			audio.currentTime = 0;
			urls = null;
		}
	});
});

$(document).on('click', '.id_lewati', function(e){
	e.preventDefault();
	if(e.which===1){
		$.ajax({
			headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'html',
			url		: '/proses/layanan/update',
			data 	: 'jenis=lewati&q=' + $('.lb_no_terakhir').html(),
			success	: function(data){
				
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText);
			}
		});
	}
});

$(document).on('click', '.id_ulang', function(e){
	e.preventDefault();
	if(e.which===1){
		$.ajax({
			headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'html',
			url		: '/proses/konversi_nomor',
			data 	: 'jenis=ulang&q=' + $('.lb_no_terakhir').html(),
			success	: function(data){
				if(data.length > 0){
					_data = 'in.wav,nomor-urut.mp3,' + data.replace(/\s+/g, '.mp3,') + '.mp3,out.wav';
					_obj = '<source src="/custom/audio/in.wav" type="audio/mpeg">' +
						'<source src="/custom/audio/in.wav" type="audio/mpeg">' +
						'<source src="/custom/audio/' + data.replace(/\s+/g, '.mp3" type="audio/mpeg">,<source src="/custom/audio/') + '.mp3" type="audio/mpeg"><source src="/custom/audio/out.wav" type="audio/mpeg">';
					$('#id_audio').html(null);
					$('#id_audio').html(_obj);
					$('#id_audio').trigger('play');
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText);
			}
		});
	}
});

$(document).on('click', '.id_panggil', function(e){
	e.preventDefault();
	if(e.which===1){
		$('.id_panggil').prop('disabled', true);
		$.ajax({
			headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'html',
			url		: '/proses/layanan/update',
			data 	: 'q=update&id=' + $('.lb_no_terakhir').html(),
			success	: function(data){
				if(data==='0'){

		$.ajax({
			headers	: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
			dataType: 'html',
			url		: '/proses/konversi_nomor',
			data 	: 'jenis=baru&q=' + $('.lb_no_terakhir').html(),
			success	: function(data){
				if(data.length > 0){
					_data = 'in.wav,nomor-urut.mp3,' + data.replace(/\s+/g, '.mp3,') + '.mp3,out.wav';
					_obj = '<source src="/custom/audio/in.wav" type="audio/mpeg">' +
						'<source src="/custom/audio/in.wav" type="audio/mpeg">' +
						'<source src="/custom/audio/' + data.replace(/\s+/g, '.mp3" type="audio/mpeg">,<source src="/custom/audio/') + '.mp3" type="audio/mpeg"><source src="/custom/audio/out.wav" type="audio/mpeg">';
					$('#id_audio').html('');
					$('#id_audio').html(_obj);
					$('#id_audio').trigger('play');
				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText);
			}
		});

				}
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert(xhr.responseText);
			}
		});

	}
});

window.setInterval(function(){get_data();}, 2000);

</script>
@endsection