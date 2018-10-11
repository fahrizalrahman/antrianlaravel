<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href=" {{asset('css/file.css')}} ">
   
    <title>Contoh Lantai 2</title>
</head>
<body class="container-fluid" style="background-image:url({{('img/log/bg-log.jpg')}})">
    <div class="container-fluid">
        <div class="row" style="margin-top:0px;">
            <div class="col-sm-12" style="height:70px; background-color:#e6e6e6;">
                <img src="{{asset('img/log/logo-bpom.png')}}" style="margin-top:7px;" width="220px" height="55px" >
                <span style="float:right; text-align:center; height:30px; margin-left:-15px; margin-right:-15px; width:20%;">
                        <div class="time">
                            <h1 style="text-align:center; color:#252525;; margin-top:8px;">Lantai 2</h1> 
                            {{-- <p style="color:forestgreen; text-align:center;"><h1><b></b></h1></p> --}}
                        </div>
                    </span>
            </div>

            <div class="col-md-12" style="height:2px; width:100%; background-color:#3badc9;">
                </div>
            @if($bgLantai2->count() > 0)
            <div class="col-sm-7"  style="background-image:url({{url(Storage::url($bgLantai2->first()->filename))}}); margin-right:-13px; width:820px; height:auto; background-size:cover; background-position:center; background-repeat:no-repeat;">                
            </div>
            @else
            <div class="col-sm-7" style="background-color:white; margin-right:-13px; width:820px; height:auto; background-size:cover; background-position:center; background-repeat:no-repeat;">                
            </div>
            @endif

            <div class="col-sm-4" style="width:auto; height:auto;">
                <table border="1px" style="width:132%; height:auto;">
                    <?php $_i=1; ?>
                    @foreach ($lantai2 as $lantai2)
                    <tr>
                        <td class="col-md-4" style="color:white;background-color:#2b869d; height:53px; width:388px;">{{$lantai2->nama_layanan}}</td>
                        <td rowspan="2" style="color:white;background-color:#236c7d; width:100px; height:53px; text-align:center; border-color:honeydew;"><h3 id="lok_{{ $_i }}"></h3></td>
                    </tr>
                    
                    <tr>
                        <td class="col-md-4" style="color:white;background-color:#34a1bc; height:53px; width:100px;">{{$lantai2->kode}}</td>
                    </tr>
                    <?php $_i++; ?>
                    @endforeach
                
                </table>
            </div>
            <div class="col-md-12" style="height:2px; width:100%; background-color:#3badc9;">
                </div>
        </div>
        
        <div class="row">
            <div class="col-md-12" style="background-color:#252525; height:40px;">
                <span style="float:left; height:40px;color:white;background-color:#3badc9; text-align:center; width:10%; margin-left:-15px;"><b> <h3 id="time-part">  </h3></b></span> 
            </div>
        </div>
    </div>


    <script src="{{asset ('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/moment.min.js')}}"></script>

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

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_satu'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_1').html(f.data);
        }else{
            $('#lok_1').html('0');
        }
    }


    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_dua'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_2').html(f.data);
        }else{
            $('#lok_2').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_tiga'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_3').html(f.data);
        }else{
            $('#lok_3').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_empat'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_4').html(f.data);
        }else{
            $('#lok_4').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_lima'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_5').html(f.data);
        }else{
            $('#lok_5').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_enam'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_6').html(f.data);
        }else{
            $('#lok_6').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_tujuh'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#lok_7').html(f.data);
        }else{
            $('#lok_7').html('0');
        }
    }

    var es = new EventSource("<?php echo action('Monitoring\monitoring2Controller@layanan_aktif'); ?>");
    es.onmessage = function(f) {
        if(f.data.length > 0){
            $('#td_style').css('background-color', '#34a1bc');
            $('#lok_' + f.data).parent('td').css('background-color', 'red');
        }
    }
   </script>

</body>
</html>