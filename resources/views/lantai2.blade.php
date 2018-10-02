<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Lantai 2</title>
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
    
    <div class="col-md-8" style=" padding-top:20px; padding-right:7px;" >  
      <div class="col-md-12" style="height:70px; width:100%; background-color:gainsboro;">
        <img src=" {{asset('img/log/logo_bpom.png')}}" width="100px" height="60px">
      </div> 
      <table>
        <img src="{{asset('img/come.jpg')}}" width="100%" style="padding-right:-5px;" height="336px">
      </table>        
    </div>
    <div class="col-md-4" style=" padding-left:0px; margin-right:-1px; padding-top:20px;">
      <table>
        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">SURAT</td>
          <td rowspan="2" style="background-color:brown;"><h1>001</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue; border-color:red;">Loket 1</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">LOKET A</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>002</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 2</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">LOKET BDM</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>003</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 3</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">PENGAMBILAN SK</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>004</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;"> Loket 4</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI IT</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>005</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 5</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">UJIAN PRAKLINIK</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>006</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 6</td>
        </tr>

        <tr>
          <td class="col-md-4" style="background-color:darkcyan;">PENDAF. KONSULTASI IKLAN</td>
          <td rowspan="2" style="background-color:lightskyblue;"><h1>007</h1></td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue;">Loket 7</td>
        </tr>
        
      </table>
    </div>
    {{-- <div class="col-md-12" style="width:100%; height:30px; background-color:black; float:left;">
      <span><marquee>Pengunjung</marquee></span>
    </div> --}}

    {{-- <div class="col-md-12">
      <table>
        <img src=" {{asset('img/come.jpg')}} " style="width:100%; height:70px;">
      </table>
    </div> --}}
    <div class="col-md-12" style="background-color:black;">
      <span style="float:left; height:25px; background-color:cornflowerblue; width:5%;">12:03</span> 
      <span style="float:right; height:25px; width:95%;"><marquee behavior="" direction="">Tulisan berjalan disini</marquee></span>
    </div>

</div>

</body>
</html>
