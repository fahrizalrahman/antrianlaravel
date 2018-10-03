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
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">
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
                <div class="container">	
                <section class="main" style="margin-top:20px;">		
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item">				
                                <div class="ch-info" id="flip-1">
                                    <div class="ch-info-front ch-img-1"></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket->count() > 0)
                                       @foreach($layanan_loket->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>	
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-2"></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket_2->count() > 0)
                                        @foreach($layanan_loket_2->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif                                        
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket_3->count() > 0)
                                        @foreach($layanan_loket_3->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li> <br><br><br>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                     @if($layanan_loket_4->count() > 0)
                                        @foreach($layanan_loket_4->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="ch-item">
                            <div class="ch-info">
                                <div class="ch-info-front ch-img-3"></div>
                                <div class="ch-info-back">
                                   @if($layanan_loket_5->count() > 0)
                                         @foreach($layanan_loket_5->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                    @endif  
                                </div>
                            </div>
                        <div class="back">
                                <h2 style="color:black;">Gentlesir</h2>
                                <p style="color:black;">
                                    Globally facilitate timely bandwidth vis-a-vis user friendly core competencies. Uniquely architect covalent e-tailers through viral Lorem ipsum dolor sit amet, con.
                                </p>
                        </div>
                        </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info">
                                    <div class="ch-info-front ch-img-3"></div>
                                    <div class="ch-info-back">
                                     @if($layanan_loket_5->count() > 0)
                                        @foreach($layanan_loket_6->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                       @endif 
                                    </div>
                                </div>
                            </div>
                        <div class="back">
                                <h2 style="color:black;">Gentlesir</h2>
                                <p style="color:black;">
                                    Globally facilitate timely bandwidth vis-a-vis user friendly core competencies. Uniquely architect covalent e-tailers through viral Lorem ipsum dolor sit amet, con.
                                </p>
                        </div>
                        </div>
                    </div>
                {{-- </div>                     --}}
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

<script type="text/javascript">
$(document).on('click', '#flip-1', function () { 

      $.get('{{ url("layanan/1") }}',{'_token': $('meta[name=csrf-token]').attr('content')}, function(resp){  
    });

  });
</script>

