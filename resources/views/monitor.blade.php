<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monitoring Utama</title>
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/file.css')}} ">

</head>
<body style="container-fluid; overflow-x:hidden; background-image:url({{asset('img/log/bg-log.jpg')}});">

    <div class="container-fluid">
    {{-- <div class="row"> --}}
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
            <div class="container-fluid" style="margin-left:19px;">
              <div class="row" style="margin-top:0px; margin-left:5px;">
                    <div class="col-sm-6" style="margin-top:1%; height:auto; width:auto;">
                        <table class="table-responsive" style="position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                        <td rowspan="0" style="background-color:#276a7b; height:40px; text-align:center; "><h1> <b> 1 </b></h1></td>
                        <?php $_1=1; ?>
                        @foreach ($MonitorLt1 as $Lt1)
                            <tr>
                            <td style="background-color:#278698; height:40px;">{{$Lt1->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt1->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok_{{ $_1 }}"></h4></td>
                            </tr>
                        <?php $_1++; ?>    
                        @endforeach
                        
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:1%;">
                        <table class="table-responsive" style=" position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                        <td rowspan="0" style="background-color:#276a7b; height:40px; text-align:center; "><h1> <b> 2</b> </h1></td>
                        <?php $_2=1; ?>
                        @foreach ($MonitorLt2 as $Lt2)    
                            <tr>
                                <td style="background-color:#278698; height:40px;">{{$Lt2->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt2->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok2_{{ $_2 }}"></h4></td>
                            </tr>
                        <?php $_2++; ?>
                        @endforeach
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:-2.3%;">
                        <table class="table-responsive" style=" position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                        <td style="background-color:#276a7b; height:40px; text-align:center; " rowspan="0"><h1> <b> 3</b> </h1></td>
                        <?php $_3=1; ?>
                        @foreach ($MonitorLt3 as $Lt3)    
                            <tr>
                                <td style="background-color:#278698; height:40px;">{{$Lt3->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt3->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok3_{{ $_3 }}"></td>
                            </tr>
                        <?php $_3++; ?>
                        @endforeach
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:0.4%;">    
                        <table class="table-responsive" style=" position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">    
                        <td style="background-color:#276a7b; height:40px; text-align:center; " rowspan="0"><h1> <b> 4</b> </h1></td>
                        <?php $_4=1; ?>
                        @foreach ($MonitorLt4 as $Lt4)    
                            <tr>
                                <td style="background-color:#278698; height:40px;">{{$Lt4->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt4->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok4_{{ $_4 }}"></td>
                            </tr>
                        <?php $_4++; ?>
                        @endforeach
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:0.4%;">
                        <table class="table-responsive" style=" position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">
                        <td style="background-color:#276a7b; height:40px; text-align:center; " rowspan="0"><h1> <b> 5</b> </h1></td>
                        <?php $_5=1; ?>
                        @foreach ($MonitorLt5 as $Lt5)    
                            <tr>
                                <td style="background-color:#278698; height:40px;">{{$Lt5->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt5->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok5_{{ $_5 }}"></td>
                            </tr>
                        <?php $_5++; ?>
                        @endforeach
                        </table>
                    </div>

                    <div class="col-sm-6" style="margin-top:-6.9%;">
                        <table class="table-responsive" style=" position:static;">
                        <col width="90">
                        <col width="430">
                        <col width="80">
                        <col width="50">    
                        <td style="background-color:#276a7b; height:40px; text-align:center; " rowspan="0"><h1> <b> 6</b> </h1></td>
                        <?php $_6=1; ?>
                        @foreach ($MonitorLt6 as $Lt6)    
                            <tr>
                                <td style="background-color:#278698; height:40px;">{{$Lt6->nama_layanan}}</td>
                                <td style="background-color:#278698; height:40px;">{{$Lt6->kode}}</td>
                                <td style="background-color:#278698; height:40px;"><h4 id="lok6_{{ $_6 }}"></td>
                            </tr>
                        <?php $_6++; ?>
                        @endforeach
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
            <p style="size:18px; color:#e6e6e6; text-align:center; font-style:bold;"> SELAMAT DATANG DI KANTOR BADAN PENGAWAS OBAT DAN MAKANAN</p>
        </div>
    </div>
</div>
    

    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('input').iCheck({
           checkboxClass: 'icheckbox_flat-aero',
           radioClass: 'iradio_flat-aero'
         });
        });
       </script>
      <!-- end: Javascript -->
   
      <script type="text/javascript">
          $(document).ready(function() {
               var interval = setInterval(function() {
               var momentNow = moment();
               $('#time-part').html(momentNow.format('hh:mm'));
               }, 100);
           });
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_satu'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_1').html(f.data);
       }else{
           $('#lok_1').html('0');
       }
   }
   
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_dua'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_2').html(f.data);
       }else{
           $('#lok_2').html('0');
       }
   }
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_tiga'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_3').html(f.data);
       }else{
           $('#lok_3').html('0');
       }
   }
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_empat'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_4').html(f.data);
       }else{
           $('#lok_4').html('0');
       }
   }
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_lima'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_5').html(f.data);
       }else{
           $('#lok_5').html('0');
       }
   }
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_enam'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#lok_6').html(f.data);
       }else{
           $('#lok_6').html('0');
       }
   }
   
   var es = new EventSource("<?php echo action('Monitoring\monitoringController@layanan_aktif'); ?>");
   es.onmessage = function(f) {
       if(f.data.length > 0){
           $('#td_style').css('background-color', '#34a1bc');
           $('#lok_' + f.data).parent('td').css('background-color', 'red');
       }
   }
      </script>

    {{-- end Lantai 1 --}}

    {{-- Lantai 2 --}}
    <script type="text/javascript">
        $(document).ready(function(){
          $('input').iCheck({
           checkboxClass: 'icheckbox_flat-aero',
           radioClass: 'iradio_flat-aero'
         });
        });
      </script>
      <!-- end: Javascript -->

   <script type="text/javascript">
       $(document).ready(function() {
            var interval = setInterval(function() {
            var momentNow = moment();
            $('#time-part').html(momentNow.format('hh:mm'));
            }, 100);
        });

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_satu'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_1').html(f.data);
        }else{
            $('#lok2_1').html('0');
        }
    }


    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_dua'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_2').html(f.data);
        }else{
            $('#lok2_2').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_tiga'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_3').html(f.data);
        }else{
            $('#lok2_3').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_empat'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_4').html(f.data);
        }else{
            $('#lok2_4').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_lima'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_5').html(f.data);
        }else{
            $('#lok2_5').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_enam'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_6').html(f.data);
        }else{
            $('#lok2_6').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_tujuh'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok2_7').html(f.data);
        }else{
            $('#lok2_7').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_aktif'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#td_style').css('background-color', '#34a1bc');
            $('#lok2_' + f.data).parent('td').css('background-color', 'red');
        }
    }
   </script>
   {{-- end Lantai 2 --}}

   {{-- Lantai 3 --}}
   <script type="text/javascript">
    $(document).ready(function(){
      $('input').iCheck({
       checkboxClass: 'icheckbox_flat-aero',
       radioClass: 'iradio_flat-aero'
     });
    });
    </script>
  <!-- end: Javascript -->

<script type="text/javascript">
    $(document).ready(function() {
         var interval = setInterval(function() {
         var momentNow = moment();
         $('#time-part').html(momentNow.format('hh:mm'));
         }, 100);
     });

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_satu'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_1').html(f.data);
     }else{
         $('#lok3_1').html('0');
     }
 }


 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_dua'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_2').html(f.data);
     }else{
         $('#lok3_2').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_tiga'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_3').html(f.data);
     }else{
         $('#lok3_3').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_empat'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_4').html(f.data);
     }else{
         $('#lok3_4').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_lima'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_5').html(f.data);
     }else{
         $('#lok3_5').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_enam'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_6').html(f.data);
     }else{
         $('#lok3_6').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_tujuh'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#lok3_7').html(f.data);
     }else{
         $('#lok3_7').html('0');
     }
 }

 var es = new EventSource("<?php echo action('Monitoring\monitoring3Controller@layanan_aktif'); ?>");
 es.onmessage = function(f) {
     if(f.data.length > 0){
         $('#td_style').css('background-color', '#34a1bc');
         $('#lok3_' + f.data).parent('td').css('background-color', 'red');
     }
 }
</script>
{{-- End Lantai 3 --}}

{{-- Lantai 4 --}}

<script type="text/javascript">
    $(document).ready(function(){
      $('input').iCheck({
       checkboxClass: 'icheckbox_flat-aero',
       radioClass: 'iradio_flat-aero'
     });
    });
   </script>
  <!-- end: Javascript -->

<script type="text/javascript">
 $(document).ready(function() {
      var interval = setInterval(function() {
      var momentNow = moment();
      $('#time-part').html(momentNow.format('hh:mm'));
      }, 100);
  });

var es = new EventSource("<?php echo action('Monitoring\monitoring4Controller@layanan_satu'); ?>");
es.onmessage = function(f) {
  if(f.data.length > 0){
      $('#lok4_1').html(f.data);
  }else{
      $('#lok4_1').html('0');
  }
}


var es = new EventSource("<?php echo action('Monitoring\monitoring4Controller@layanan_dua'); ?>");
es.onmessage = function(f) {
  if(f.data.length > 0){
      $('#lok4_2').html(f.data);
  }else{
      $('#lok4_2').html('0');
  }
}

var es = new EventSource("<?php echo action('Monitoring\monitoring4Controller@layanan_tiga'); ?>");
es.onmessage = function(f) {
  if(f.data.length > 0){
      $('#lok4_3').html(f.data);
  }else{
      $('#lok4_3').html('0');
  }
}


var es = new EventSource("<?php echo action('Monitoring\monitoring4Controller@layanan_aktif'); ?>");
es.onmessage = function(f) {
  if(f.data.length > 0){
      $('#td_style').css('background-color', '#34a1bc');
      $('#lok4_' + f.data).parent('td').css('background-color', 'red');
  }
}
</script>
{{-- End Lantai 4 --}}

{{-- Lantai 5 --}}

<script type="text/javascript">
$(document).ready(function() {
   var interval = setInterval(function() {
   var momentNow = moment();
   $('#time-part').html(momentNow.format('hh:mm'));
   }, 100);
});

var es = new EventSource("<?php echo action('Monitoring\monitoring5Controller@layanan_satu'); ?>");
es.onmessage = function(f) {
if(f.data.length > 0){
   $('#lok5_1').html(f.data);
}else{
   $('#lok5_1').html('0');
}
}


var es = new EventSource("<?php echo action('Monitoring\monitoring5Controller@layanan_dua'); ?>");
es.onmessage = function(f) {
if(f.data.length > 0){
   $('#lok5_2').html(f.data);
}else{
   $('#lok5_2').html('0');
}
}

var es = new EventSource("<?php echo action('Monitoring\monitoring5Controller@layanan_tiga'); ?>");
es.onmessage = function(f) {
if(f.data.length > 0){
   $('#lok5_3').html(f.data);
}else{
   $('#lok5_3').html('0');
}
}

var es = new EventSource("<?php echo action('Monitoring\monitoring5Controller@layanan_empat'); ?>");
es.onmessage = function(f) {
if(f.data.length > 0){
   $('#lok5_4').html(f.data);
}else{
   $('#lok5_4').html('0');
}
}

var es = new EventSource("<?php echo action('Monitoring\monitoring5Controller@layanan_aktif'); ?>");
es.onmessage = function(f) {
if(f.data.length > 0){
   $('#td_style').css('background-color', '#34a1bc');
   $('#lok5_' + f.data).parent('td').css('background-color', 'red');
}
}
</script>
{{-- End Lantai 5 --}}

{{-- Lantai 6 --}}

<script type="text/javascript">
    $(document).ready(function() {
       var interval = setInterval(function() {
       var momentNow = moment();
       $('#time-part').html(momentNow.format('hh:mm'));
       }, 100);
    });
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_satu'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok6_1').html(f.data);
        }else{
            $('#lok6_1').html('0');
        }
    }
    
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_dua'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
           $('#lok6_2').html(f.data);
        }else{
           $('#lok6_2').html('0');
        }
    }
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_tiga'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
           $('#lok6_3').html(f.data);
        }else{
           $('#lok6_3').html('0');
        }
    }
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_empat'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
           $('#lok6_4').html(f.data);
        }else{
            $('#lok6_4').html('0');
        }
    }
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_lima'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
           $('#lok6_5').html(f.data);
        }else{
            $('#lok6_5').html('0');
        }
    }
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_enam'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
           $('#lok6_6').html(f.data);
        }else{
            $('#lok6_6').html('0');
        }
    }
    
    var es = new EventSource("<?php echo action('Monitoring\monitoring6Controller@layanan_aktif'); ?>");
        es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#td_style').css('background-color', '#34a1bc');
            $('#lok6_' + f.data).parent('td').css('background-color', 'red');
        }
    }
    </script>
</body>
</html>