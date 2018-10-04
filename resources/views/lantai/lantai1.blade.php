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
    <script src="{{asset('js/moment.min.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
    <title>Contoh Lantai 1</title>
</head>
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">
    <div class="container">
                  <a class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <div class="media-body">
                <h3 class="dropdown-item-title"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                  <span class="float-right text-sm text-danger"></span>
                </h3>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf
                 </form>
              </div>
            </div>
            <!-- Message End -->
          </a>
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-12" style="height:130px; background-color:darkgrey;">
                <img src="{{asset('img/log/logo_bpom.png')}}" style="margin-top:13px;" width="100px" height="55px" >
            </div>
            <div class="col-sm-8" style="background-image:url({{asset('img/come.jpg')}}); width:auto; height:auto;">
                
            </div>

            <div class="col-sm-4" style="width:auto;">
                <table style="margin-right:-15px; margin-left:-14px;">
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">REGISTRASI</td>
                        <td rowspan="2" style="background-color:brown;"><h1>001</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue; border-color:red;">Loket 1</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">LOKET TAMBAHAN DATA</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>002</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 4</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">LAYANAN CS</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>003</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 5</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">VERIFIKASI BERKAS</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>004</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;"> Loket 6</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">LAYANAN HELP DESK</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>005</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 7</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">SURAT PERINTAH BAYAR</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>006</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 8</td>
                    </tr>
            
                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI kepala</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>007</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 8</td>
                    </tr>

                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI kepala</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>008</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 9</td>
                    </tr>

                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI kepala</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>009</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 9</td>
                    </tr>

                    <tr>
                        <td class="col-md-4" style="background-color:darkcyan;">KONSULTASI kepala</td>
                        <td rowspan="2" style="background-color:lightskyblue;"><h1>010</h1></td>
                    </tr>
                    <tr>
                        <td class="col-md-4" style="background-color:dodgerblue;">Loket 10</td>
                    </tr>

                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sd-12" style="background-image:url({{asset('img/come.jpg')}}); width:100%; height:100px;">
            </div>
 
            <div class="col-md-12" style="background-color:black; height:40px;">
                <span style="float:left; text-align:center; height:40px; background-color:cornflowerblue; width:5%;">
                    <div class="time">
                        <h5 class="animated fadeInLeft">21:00</h5>
                    </div>
                </span>
                <p style="text-align:center; color:aliceblue; padding-top:1%;">
                    SELAMAT DATANG DI KANTOR BADAN PENGAWAS OBAT DAN MAKANAN
                </p>
            </div>
        </div>
    </div>
</body>
</html>