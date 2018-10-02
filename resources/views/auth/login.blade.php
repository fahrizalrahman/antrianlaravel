<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Login Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/animate.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/default.css')}}/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('js/pace.min.js')}}")}}></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<div class="login-cover">
	    <div class="login-cover-image" style="background-image: url({{asset('img/log/bg-log.jpg')}})" data-id="login-cover-image"></div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <img src=" {{asset('img/log/logo_bpom.png')}} " width="100px" height="50px"/> <b>Antrian BPOM</b>
                    {{-- <small>Sistem Antrian Berbasis Web</small> --}}
                </div>
                <span class="icon">
                    <i class="fa fa-lock"></i>
				</span>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
				<form action="{{ route('login') }}" method="POST" class="margin-bottom-0">
					@csrf
                    <div class="form-group m-b-20">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg" placeholder="Masukan Email" required />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Masukan Password" required />
                    </div>
          
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Masuk</button>
                    </div>
                    <div class="m-t-20">
                        Belum Punya Akun ? Daftar <a href="{{ route('register') }}">disini</a>.
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

	<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('js/js.cookie.js')}}"></script>
	<!-- <script src="../assets/js/theme/transparent.min.js"></script> -->
	<script src="{{asset('js/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<!-- <script src="../assets/js/demo/login-v2.demo.min.js"></script> -->
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
</body>
</html>
