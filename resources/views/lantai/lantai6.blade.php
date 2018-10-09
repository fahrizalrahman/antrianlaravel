<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Lantai 6</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
  <script src="{{asset ('jquery.min.js')}}"></script>
  <script src="{{asset('popper.min.js')}}"></script>
  <script src="{{asset('bootstrap.min.js')}}"></script>
</head>
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">

<div class="container-fluid">
  <div class="row" style="margin-top:1px;">

      <div class="col-sm-12" style="height:70px; background-color:#e6e6e6;">
          <img src="{{asset('img/log/logo-bpom.png')}}" style="margin-top:7px;" width="220px" height="55px" >
          <span style="float:right; text-align:center; height:30px; margin-left:-15px; margin-right:-15px; width:20%;">
              <div class="time">
                  <h1 style="text-align:center; color:#252525;; margin-top:8px;">Lantai 6</h1> 
                  {{-- <p style="color:forestgreen; text-align:center;"><h1><b></b></h1></p> --}}
              </div>
          </span>
      </div>

    <div class="col-md-12" style="height:5px; width:100%; background-color:#3badc9;">
    </div>

    <div class="col-md-7" style="background-image:url({{url(Storage::url($bgLantai6->filename))}}); width:auto; height:auto; background-position:center; background-repeat:no-repeat;">               
    </div>
    
    <div class="col-md-5" style="width:500px; height:auto;">
      <table border="1px;" style="margin-left:-15px; width:550px; margin-right:-14px; border-color:gray;">
          @foreach ($lantai6 as $lantai6)

          <tr>
              <td class="col-md-4" style="background-color:#2b869d; width:388px; height:40px;">{{$lantai6->nama_layanan}}</td>
              <td rowspan="2" style="background-color:#236c7d; width:100px; height:40px; text-align:center; border-color:honeydew;"><h3>A-002</h3></td>
          </tr>
          
          <tr>
              <td class="col-md-4" style="background-color:#34a1bc; width:100px; height:40px;">{{$lantai6->kode}}</td>
          </tr>
          @endforeach
      </table>
     
    </div>
    <div class="col-md-12" style="height:5px; width:100%; background-color:#3badc9;">
      </div>
      <div class="col-md-6" style="background-image:url({{url(Storage::url($imgFotL6->filename))}}); width:auto; height:75px;">
    </div>

    <div class="col-md-6" style="background-image:url({{url(Storage::url($imgFotR6->filename))}}); width:auto; height:75px;">
      </div>

    <div class="col-md-12" style="background-color:#252525;">
      <span style="float:left; height:30px; background-color:#3badc9; text-align:center; width:10%; margin-left:-15px;"> <h3> 12:03</h3></span> 
      {{-- <span style="float:right; height:10px; width:95%; text-align:center;"><marquee>Tulisan berjalan disini</marquee></span> --}}
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

</body>
</html>
