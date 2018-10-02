<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Lantai 5</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
  <script src="{{asset ('jquery.min.js')}}"></script>
  <script src="{{asset('popper.min.js')}}"></script>
  <script src="{{asset('bootstrap.min.js')}}"></script>
</head>
<body>

{{-- <div class="container-fluid "> --}}
  <div class="row">

      <div class="col-md-12" style="height:70px; width:100%; background-color:gainsboro;">
          <img src=" {{asset('img/log/logo_bpom.png')}}" width="100px" height="60px" style="float:left;">
      </div>
      <div class="col-md-12" style="height:20px; width:100%; background-color:deepskyblue;">
      </div>

    <div class="col-md-4" style=" padding-left:16px; padding-right:5px; margin-top:5px; margin-left:0px; padding-top:0px;">
      <table>
        <tr style="margin-top:5px;">
          <td rowspan="2" style="background-color:brown; margin-top:5px;"><h1>001</h1></td>
          <td class="col-md-4" style="background-color:darkcyan; margin-top:5px;">HELP. TEKNOLOGI & INFORMASI</td>
        </tr>
        <tr style="margin-top:5px;">
          <td class="col-md-4" style="background-color:dodgerblue; margin-top:5px;">Loket 1</td>
        </tr>

        <tr>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>002</h1></td>
          <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI IKLAN OBAT</td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 2</td>
        </tr>

        <tr>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>003</h1></td>
          <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI SKI OBAT & IKLAN</td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 3</td>
        </tr>
        <tr>
            <td rowspan="2" style="background-color:lightskyblue;"><h1>004</h1></td>
            <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI SKI OBAT & IKLAN</td>
          </tr>
          <tr>
            <td class="col-md-4" style="background-color:dodgerblue;">Loket 4</td>
          </tr>
        </table>      
    </div>

      <div class="col-md-8" style=" padding-top:0px; padding-left:0px;">
        <table>
          <img src="{{asset('img/come.jpg')}}" width="100%" style="padding-right:-5px;" height="26 0px">
        </table>        
      </div>
      <div class="col-md-12" style="height:20px; width:100%; background-color:deepskyblue;">
      </div>

      {{-- iklan --}}
      <div class="col-md-12">
        <table>
          <img src=" {{asset('img/come.jpg')}}" style="float:left; height:120px; width:49.9%;">
          <img src=" {{asset('img/come.jpg')}}" style="float:right; height:120px; width:49.9%;">
        </table>
      </div>

    <div class="col-md-12" style="background-color:black;">
      <span style="float:left; height:25px; background-color:cornflowerblue; width:5%;">12:03</span> 
      <span style="float:right; height:25px; width:95%;"><marquee behavior="" direction="">Tulisan berjalan disini</marquee></span>
    </div>

</div>

</body>
</html>
