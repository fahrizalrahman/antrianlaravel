<!DOCTYPE doctype html>
<html lang="en">
<head>
	<!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href=" {{asset('css/bootstrap.min.css')}} ">
    <link rel="stylesheet" href=" {{asset('css/font-awesome.min.css')}} ">
    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<style type="text/css">

p{
	margin-top: 1px; margin-bottom: 1px;
}
.marginProduk{
	margin-top: 1px; margin-bottom: 1px;
	padding-left: 3px; padding-right: 3px;
}

</style>
<body>

	<div class="row">
		<div class="col-md-12">

			<img src="{{asset('img/log/logo_bpom.png')}}" style="height:50px">
			<b><p>Antrian BPOM</p></b>
			<p>-------------------------------------------------------------</p>
			<p>Jalan Percetakan Negara Nomor 23 Jakarta - 10560 - Indonesia </p>
			<p>-------------------------------------------------------------</p>
		</div>
	</div>
	<p>Nomor Antrian Anda : </p>
		<h1>{{$data_antri->no_antrian}}</h1>
	<p>	Loket  : {{ $data_loket->kode }} </p>
	<p>	Lantai : {{ $data_loket->lantai }}</p>
	<p>-------------------------------------------------------------</p>
	<p>{{$data_antri->created_at}}</p>
	<p>Terima Kasih Atas Kunjungan Anda</p>
	<p>No. Telp : +6221 4244691</p>	

</body>
<!--   Core JS Files   -->
</html>

<script>
  $( document ).ready(function() {
		window.print();
	  });
</script>
