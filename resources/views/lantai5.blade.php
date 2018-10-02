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
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">

<div class="container">
  <div class="row" style="margin-top:20px;">

      <div class="col-sm-12" style="height:130px; background-color:darkgrey;">
          <img src="{{asset('img/log/logo_bpom.png')}}" style="margin-top:13px;" width="100px" height="55px" >
      </div>

    <div class="col-md-12" style="height:25px; width:100%; background-color:deepskyblue;">
    </div>

    <div class="col-md-4" style="width:auto; height:auto;">
      <table style="margin-left:-15px; margin-right:-14px;">
        <tr>
          <td rowspan="2" style="background-color:brown;"><h1>001</h1></td>
          <td class="col-md-4" style="background-color:darkcyan;">HELP. TEKNOLOGI & INFORMASI</td>
        </tr>
        <tr>
          <td class="col-md-4" style="background-color:dodgerblue; border-color:red;">Loket 1</td>
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

      <div>
          <img src="{{asset('img/come.jpg')}}" style="background-position:center; background-repeat:no-repeat; margin-left:-15px; height:340px; width:auto;">
      </div>
    </div>

      <div class="col-md-8" style="background-image:url({{asset('img/come.jpg')}}); width:auto; height:auto; background-position:center; background-repeat:no-repeat;">               
      </div>

    <div class="col-md-6" style="background-color:lightslategrey; width:auto; height:100px;">
      <p>IMAGE HERE</p>
    </div>

    <div class="col-md-6" style="background-color:powderblue; width:auto; height:100px;">
        <p>IMAGE HERE</p>
      </div>

    <div class="col-md-12" style="background-color:black;">
      <span style="float:left; height:30px; background-color:cornflowerblue; text-align:center; width:5%;">12:03</span> 
      <span style="float:right; height:30px; width:95%; text-align:center;"><marquee>Tulisan berjalan disini</marquee></span>
    </div>

</div>

</body>
</html>
