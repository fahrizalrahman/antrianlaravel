<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <title>Display Antrian Utama</title>
</head>
<body class="container-fluid" style="background-image:url({{ asset('img/log/bg-log.jpg') }})">
    <div class="container">
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-12" style="height:130px; background-color:darkgrey;">
                <img src="{{asset('img/log/logo_bpom.png')}}" style="margin-top:13px;" width="100px" height="55px" >
            </div>
            <div class="col-md-12" style="background-image:url({{asset('img/come.jpg')}}); width:auto; height:auto;">
            </div>
            
            <div class="col-md-12" style="background-color:black; height:30px;">
                <p><marquee>Badan Pengawas Obat dan Makanan, Jalan Percetakan Negara Nomor 23 Jakarta - 10560 - Indonesia </marquee></p>
            </div>
            
            <div class="col-md-12" style="width:100%; height:600px; background-image:url( {{asset('img/come.jpg')}} ); background-size:cover; background-position:center; background-repeat:no-repeat;">
                <div class="container-fluid">
                  <div class="row" style="margin-top:60px; margin-left:5px;">   
                    @foreach($layanan_lantai as $layanan_lantais)    
                     <div class="col-sm-4">
                        <div class="card" style="width: 20rem; background-color:azure;">
                            <div class="card-header" style="background-color:chocolate;" data-toggle="tooltip" rel="tooltip" data-placement="top" title="{{$layanan_lantais->nama_layanan}}">
                                {{ str_limit($layanan_lantais->nama_layanan, $limit = 30, $end = '...') }}      
                            </div>
                            <div class="card-body">
                                <a href="{{route('print-antrian',$layanan_lantais->id)}}" class="btn btn-primary btn-sm" > 
                                <i class="fa fa-arrow-circle-right"> Pilih</i>
                                </a>
                            </div>
                        </div>
                    </div> 
                   @endforeach             
                 </div>
                </div>                  
            </div>                    
        </div>
        <div class="row">
            <div class="col-md-12" style="background-color:black; height:40px;">
                <p style="text-align:center; color:aliceblue; padding-top:1%;">
                    Copyright BPOM @2018
                </p>
            </div>
        </div>
    </div>
</body>
</html>

<script>
  $( document ).ready(function() {
                $('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
            });
</script>