<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Register Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<!-- <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" /> -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/fontawesome-all.min.css')}}" rel="stylesheet" />
	<!-- <link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" /> -->
	<link href="{{asset('css/style.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/style-responsive.min.css')}}" rel="stylesheet" />
	<link href="{{asset('css/default.css')}}" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('js/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top bg-black-darker">
	
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin register -->
        <div class="register register-with-news-feed">
            <!-- begin news-feed -->
            <div class="news-feed">
                <div class="news-image" style="background-image: url({{asset('img/log/bg-log.jpg')}})"></div>
                <div class="news-caption">
                    <h4 class="caption-title"><b>Antrian Laravel</b>
                    {{-- <p>
                        As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
                    </p> --}}
                </div>
            </div>
            <!-- end news-feed -->
            <!-- begin right-content -->
            <div class="right-content">
                <!-- begin register-header -->
                <h1 class="register-header">
                        <img src=" {{asset('img/log/logo_bpom.png')}} " width="100px" height="50px"/>
                    Sign Up
                    {{-- <small>Buat akun untuk mengakses sistem</small> --}}
                </h1>
                <!-- end register-header -->
                <!-- begin register-content -->
                <div class="register-content">
                    <form action=" {{route('register')}} " method="POST" class="margin-bottom-0">
                        @csrf
                        <label class="control-label">Nama <span class="text-danger">*</span></label>
                        <div class="row row-m-b-15">
                            <div class="col-md-12 m-b-15">
                                <input type="text" id="name" name="name" value="{{ old('name')}}" class="form-control" placeholder="Masukan Nama" required />
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="email" id="email" name="email" value=" {{old('email')}} " class="form-control" placeholder="Masukan Email" required />
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <label class="control-label"> Jabatan <span class="text-danger">*</span> </label>
                            <div class="form-group row m-b-15">
                                {{-- {!! Form::label('id', 'Jabatan', ['class'=>'text-danger']) !!} --}}
                                <div class="col-md-12">
                                {!! Form::select('id',App\Jabatan::pluck('nama_jabatan','id')->all(), null,['class'=>'form-control','name'=>'jabatan','id'=>'jabatan']) !!}
                                {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
                                </div>
    
                                 @if ($errors->has('jabatan'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('jabatan') }}</strong>
                                        </span>
                                @endif
                            </div>

                            <label class="control-label col-form-label">Lantai <span class="text-danger">*</span> </label>
                            <div class="form-group row m-b-15">
                                    {{-- <label for="lantai" class="col-md-4 col-form-label text-md-right">{{ __('Lantai') }}</label> --}}
                                    <div class="col-md-12" >
                                       <select class="form-control{{ $errors->has('lantai') ? ' is-invalid' : '' }}" id="lantai" name="lantai">
                                       <option >1</option>
                                       <option >2</option>
                                       <option >3</option>
                                       <option >4</option>
                                       <option >5</option>
                                       <option >6</option>
                                       </select>
                                     @if ($errors->has('lantai'))
                                          <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('lantai') }}</strong>
                                           </span>
                                        @endif
                                    </div>
                               </div>
                    
                        <label class="control-label">Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password" required />
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <label class="control-label">Konfirmasi Password <span class="text-danger">*</span></label>
                        <div class="row m-b-15">
                            <div class="col-md-12">
                                <input type="password" name="password_confirmation" id="password-confirm" class="form-control" placeholder="Konfirmasi Password" required>
                            </div>
                        </div>
                
                        <div class="register-buttons">
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                        </div>
                        <div class="m-t-20 m-b-40 p-b-40">
                            Sudah Punya Akun ? Login <a href=" {{route('login')}} ">disini</a>.
                        </div>
                        <hr />
                        <p class="text-center">
                            &copy; Color Admin All Right Reserved 2018
                        </p>
                    </form>
                </div>
                <!-- end register-content -->
            </div>
            <!-- end right-content -->
        </div>
        <!-- end register -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('js/jquery-ui.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('js/js.cookie.js')}}"></script>
	<script src="{{asset('js/transparent.min.js')}}"></script>
	<script src="{{asset('js/apps.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
