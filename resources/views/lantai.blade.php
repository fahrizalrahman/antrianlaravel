<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Lantai</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
  <script src="{{asset ('jquery.min.js')}}"></script>
  <script src="{{asset('popper.min.js')}}"></script>
  <script src="{{asset('bootstrap.min.js')}}"></script>
</head>
<body>

<div class="container-fluid ">
  <div class="row">
    
    <div class="col-md-8" style=" margin-top:20px;" >
        <div class="col-md-12" style="height:87px; width:100%; background-color:gainsboro;">
            <img src=" {{asset('img/log/logo_bpom.png')}}" width="100px" height="55px">
        </div>
        
        <table>         
          <img src="{{asset('img/come.jpg')}}" width="100%" height="100%" style=" background-position:center; background-repeat:no-repeat;">
        </table>
        
    </div>

    <div class="col-md-4" style="margin-top:20px;">
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
    
    {{-- <div class="col-md-12">
      <table>
        <img src=" {{asset('img/come.jpg')}}" style="width:100%; height:20%;">
      </table>
    </div> --}}
    {{-- <div class="col-md-12" style="background-color:black;">
      <span style="float:left; height:30px; background-color:cornflowerblue; width:5%;">12:03</span> 
      <span style="float:right; height:30px; width:95%;"><marquee>Tulisan berjalan disini</marquee></span>
    </div> --}}

</div>

</body>
</html>
