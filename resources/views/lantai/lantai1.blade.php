<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
    <title>Contoh Lantai 1</title>
</head>
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">
    <div class="container-fluid">
                  <a class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
               
              </div>
            </div>
            <!-- Message End -->
          </a>
        <div class="row">
                
            <div class="col-sm-12" style="height:70px; background-color:#e6e6e6;;">
                <img src="{{asset('img/log/logo-bpom.png')}}" style="margin-top:7px;" width="220px" height="55px" >
                <span style="float:right; text-align:center; height:30px; margin-left:-15px; margin-right:-15px; width:20%;">
                        <div class="time">
                            <h1 style="text-align:center; color:#252525;; margin-top:8px;">Lantai 1</h1> 
                            
                        </div>
                    </span>
            </div>
        <div class="col-sm-7" style="background-image:url({{url(Storage::url($bgLantai1->filename))}}); width:800px; height:480px; background-size:cover; background-position:center; background-repeat:no-repeat;">     
        </div>
            <div class="col-sm-5" style="width:500px; height:auto;">
                <table border="1px;" style="margin-left:-15px; width:550px; margin-right:-14px; border-color:gray;">
                        @foreach ($lantai1 as $lantai1)
                        <tr>
                            <td class="col-md-4" style="background-color:#2b869d; height:40px; width:388px;">{{$lantai1->nama_layanan}}</td>
                            <td rowspan="2" style="background-color:#236c7d; width:100px; height:40px; text-align:center; border-color:honeydew;"><h3>A-002</h3></td>
                        </tr>
                        <tr>
                            <td class="col-md-4" style="background-color:#34a1bc; height:40px; width:100px;">{{$lantai1->kode}}</td>
                        </tr>
                        @endforeach
                </table>
            </div>
        </div>

        <div class="row">
                <div class="col-md-12" style="height:5px; width:100%; background-color:#236c7d;">
                </div>
                <div class="col-md-6" style="background-image:url({{url(Storage::url($imgFotL1->filename))}}); width:auto; height:75px;">
                </div>
            
                <div class="col-md-6" style="background-image:url({{url(Storage::url($imgFotR1->filename))}}); width:auto; height:75px;">
                 </div>
 
            <div class="col-md-12" style="background-color:#252525;; height:30px;">
                <span style="float:left; height:30px; background-color:#3badc9; text-align:center; width:10%; margin-left:-15px;"> <h3> 12:03</h3></span> 
            </div>
            </div>
        </div>
    </div>
    {{-- Javascript --}}
    
    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <!-- custom -->
    <script src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript">
     $(document).ready(function(){
       $('input').iCheck({
        checkboxClass: 'icheckbox_flat-aero',
        radioClass: 'iradio_flat-aero'
      });
     });
   </script>
   <!-- end: Javascript -->
</body>
</html>