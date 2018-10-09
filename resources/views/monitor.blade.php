<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitoring Utama</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body style="background-image:url({{asset('img/log/bg-log.jpg')}});">

    <div class="container-fluid">
    <div class="row">
            <div class="col-sm-12" style="height:70px; background-color:#e6e6e6;">
                    <img src="{{asset('img/log/logo-bpom.png')}}" style="margin-top:7px;" width="220px" height="55px" >
                    <span style="float:right; text-align:center; height:30px; margin-left:-15px;  margin-right:-35px; width:20%;">
                        <div class="time">
                            <h1 style="text-align:center; color:#252525;; margin-top:8px; float:center;"> Monitoring</h1> 
                            {{-- <p style="color:forestgreen; text-align:center;"><h1><b></b></h1></p> --}}
                        </div>
                    </span>
                </div>
                <div class="col-md-12" style="height:2px; width:100%; background-color:#3badc9;">
                    </div>
        <div class="col-md-12" style="width:100%; height:auto; background-image:url( {{asset('img/come.jpg')}} ); background-size:cover; background-position:center; background-repeat:no-repeat;">
            <div class="container-fluid">
              <div class="row" style="margin-top:0px; margin-left:5px;">
                    <div class="col-sm-6" style="margin-top:1%;">
                        <table class="table-responsive" style="position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                            <tr>
                                <td rowspan="6" style="background-color:#276a7b; text-align:center; "><h1> <b> 1 </b></h1></td>
                                <td style="background-color:#278698">Registrasi Dokumen Masuk</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Penyerahan Surat Keluar</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Penerimaan Surat Masuk</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Pembayaran</td>
                                <td style="background-color:#31a0be">Loket 4</td>
                                <td style="background-color:#31a0be">004</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#278698">Konsultasi</td>
                                <td style="background-color:#278698">Loket 5</td>
                                <td style="background-color:#278698">005</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#31a0be">Konsultasi IT</td>
                                <td style="background-color:#31a0be">Loket 6</td>
                                <td style="background-color:#31a0be">006</td>
                            </tr>    
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:1%;">
                        <table class="table-responsive" style="background-color:cadetblue; position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                            <tr>
                                <td rowspan="7" style="background-color:#276a7b; text-align:center; "><h1> <b> 2</b> </h1></td>
                                <td style="background-color:#278698">Surat</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Loket A</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Loket B DM</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Pengambilan SK</td>
                                <td style="background-color:#31a0be">Loket 4</td>
                                <td style="background-color:#31a0be">004</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#278698">Konsultasi IT</td>
                                <td style="background-color:#278698">Loket 5</td>
                                <td style="background-color:#278698">005</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#31a0be">Uji Praklinik</td>
                                <td style="background-color:#31a0be">Loket 6</td>
                                <td style="background-color:#31a0be">006</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Pendaftaran Konsultasi Iklan</td>
                                <td style="background-color:#278698">Loket 7</td>
                                <td style="background-color:#278698">007</td>
                            </tr>    
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:-1.6%;">
                        <table class="table-responsive" style="background-color:cadetblue; position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">    
                            <tr>
                                <td style="background-color:#276a7b; text-align:center; " rowspan="7"><h1> <b> 3</b> </h1></td>
                                <td style="background-color:#278698">Registrasi</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Layanan Tambahan</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Costumer Service</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Verifikasi Berkas</td>
                                <td style="background-color:#31a0be">Loket 4</td>
                                <td style="background-color:#31a0be">004</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#278698">Help Desk</td>
                                <td style="background-color:#278698">Loket 5</td>
                                <td style="background-color:#278698">005</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#31a0be">Surat Perintah Bayar</td>
                                <td style="background-color:#31a0be">Loket 6</td>
                                <td style="background-color:#31a0be">006</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Konsultasi Kepala</td>
                                <td style="background-color:#278698">Loket 7</td>
                                <td style="background-color:#278698">007</td>
                            </tr>    
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:0.4%;">    
                        <table class="table-responsive" style="background-color:cadetblue; position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">    
                            <tr>
                                <td style="background-color:#276a7b; text-align:center;" rowspan="3"><h1> <b>4</b></h1></td>
                                <td style="background-color:#278698">Help Desk Teknologi Informasi & Komunikasi</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Konsultasi Iklan Obat</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Konsultasi SKI Obat dan AMP Narkotika Psikotoprika dan Prekursor</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:0.4%;">
                        <table class="table-responsive" style="background-color:cadetblue; position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                            <tr>
                                <td style="background-color:#276a7b; text-align:center;" rowspan="4"><h1> <b>5</b></h1></td>
                                <td style="background-color:#278698">Penerimaan Badan Usaha Baru</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Penerimaan Bahan Baku</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Penerimaan Tambahan Data</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Konsultasi</td>
                                <td style="background-color:#31a0be">Loket 4</td>
                                <td style="background-color:#31a0be">004</td>
                            </tr>    
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:-3.8%;">
                        <table class="table-responsive" style="background-color:cadetblue; position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">    
                            <tr>
                                <td style="background-color:#276a7b; text-align:center;" rowspan="6"><h1> <b>6</b> </h1></td>
                                <td style="background-color:#278698">Pengaduan Konsumen</td>
                                <td style="background-color:#278698">Loket 1</td>
                                <td style="background-color:#278698">001</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Evaluasi Sistemaster Plan</td>
                                <td style="background-color:#31a0be">Loket 2</td>
                                <td style="background-color:#31a0be">002</td>
                            </tr>
                            <tr>
                                <td style="background-color:#278698">Perizinan Ekspor</td>
                                <td style="background-color:#278698">Loket 3</td>
                                <td style="background-color:#278698">003</td>
                            </tr>
                            <tr>
                                <td style="background-color:#31a0be">Verifikasi Berkas</td>
                                <td style="background-color:#31a0be">Loket 4</td>
                                <td style="background-color:#31a0be">004</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#278698">Konsultasi Standar Pangan</td>
                                <td style="background-color:#278698">Loket 5</td>
                                <td style="background-color:#278698">005</td>
                            </tr>      
                            <tr>
                                <td style="background-color:#31a0be">Konsultasi Distribusi ONPP</td>
                                <td style="background-color:#31a0be">Loket 6</td>
                                <td style="background-color:#31a0be">006</td>
                            </tr>
                        </table>
                    </div>

                    <div class="col-sm-6" style=" margin-top:0.4%;">
                        <table class="table-responsive" style="background-color:beige; position:static; margin-bottom:4px;">
                        <col width="600px">    
                            <tr>
                                <td style="color:blue; padding-left:20px;"> <b> <u> Keamanan Pangan Faktor Penting Dalam Perhelatan Asian Games</u></b></td>
                            </tr>
                            <tr>
                                <td style="color:black; font-size:11px; padding-left:20px; ">
                                     Jakarta- Perhelatan Asian Games ke-18 akan segera dimulai pada tanggal 18 Agustus 2018.
                                     Indonesia sebagai tuan rumah terus bekerja keras memastikan kesiapan seluruh infrastruktur
                                     Asian Games yang akan di fokuskan di dua kota yakni Jakarta dan Palembang.
                                </td>
                            </tr>
                        </table>
                    </div>                    
                </div>
            </div>
           
        </div>
        <div class="col-md-12" style="height:2px; width:100%; background-color:#3badc9;">
            </div>
        <div class="col-md-12" style="width:100%; height:30px; background-color:black;">
            <p style="size:18px; text-align:center;"> SELAMAT DATANG DI KANTOR BADAN PENGAWAS OBAT DAN MAKANAN</p>
        </div>
    </div>
</div>
        
</body>
</html>