<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Lantai 3</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
  <script src="{{asset ('jquery.min.js')}}"></script>
  <script src="{{asset('popper.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>
  <script src="{{asset('bootstrap.min.js')}}"></script>

</head>
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">
  <div class="container-fluid">
    <div class="row" style="margin-top:0px;">
      
            <div class="col-sm-12" style="height:70px; background-color:#e6e6e6;">
                    <img src="{{asset('img/log/logo-bpom.png')}}" style="margin-top:7px;" width="220px" height="55px" >
                    <span style="float:right; text-align:center; height:30px; margin-left:-15px; margin-right:-15px; width:20%;">
                        <div class="time">
                            <h1 style="text-align:center; color:#252525;; margin-top:8px;">Lantai 3</h1> 
                            {{-- <p style="color:forestgreen; text-align:center;"><h1><b></b></h1></p> --}}
                        </div>
                    </span>
                </div>
                <div class="col-md-12" style="height:2px; width:100%; background-color:#3badc9;">
                </div>

      <div class="col-sm-5" style="background-color:darkgray; width:550px; height:auto;">
        <table border="1px" style="margin-right:-13px; width:623px; margin-left:-15px;">
                @foreach ($lantai3 as $lantai3)

                <tr>
                    <td class="col-md-4" style="color:white;background-color:#2b869d; height:53px; width:388px;">{{$lantai3->nama_layanan}}</td>
                    <td rowspan="2" style="color:white;background-color:#236c7d; width:100px; height:53px; text-align:center; border-color:honeydew;"><h3>A-002</h3></td>
                </tr>
                
                <tr>
                    <td class="col-md-4" style="color:white;background-color:#34a1bc; height:53px; width:100px;">{{$lantai3->kode}}</td>
                </tr>
                @endforeach
        </table>
      </div>

    @if($bgLantai3->count())
      <div class="col-sm-7" style="background-image:url({{url(Storage::url($bgLantai3->first()->filename))}}); height:auto; width:auto;">
      </div>
      @else
           <div class="col-sm-7" style="background-color:white; height:auto; width:auto;">
      </div>
      @endif 

    </div>
  

        <div class="row">
            <div class="col-md-12" style="background-color:#252525; height:40px;">
                <span style="float:right; height:40px;color:white;background-color:#3badc9; text-align:center; width:10%; margin-right:-15px;"><b> <h3 id="time-part">  </h3></b></span> 
            </div>
        </div>

  </div>
</body>
</html>

 {{-- Javascript --}}
    
 <script src="{{asset ('js/jquery.min.js')}}"></script>
 <script src="{{asset('js/popper.min.js')}}"></script>
 <script src="{{asset('js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/moment.min.js')}}"></script>
 <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
 <!-- custom -->
 <script src="{{asset('js/main.js')}}"></script>
 
   <script type="text/javascript">
       $(document).ready(function() {
            var interval = setInterval(function() {
            var momentNow = moment();
            $('#time-part').html(momentNow.format('hh:mm'));
            }, 100);
        });
   </script>
