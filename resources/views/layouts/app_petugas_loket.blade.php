<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @yield('header_script')
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper" id="app">
        <nav class="main-header navbar navbar-expand navbar-light border-bottom" style="background-color:#17A2B8">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown">
                        <i class="nav-icon fa fa-user"></i> {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                        <a class="dropdown-item">
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title"  onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}
                                        <span class="float-right text-sm text-danger"></span>
                                    </h3>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                </div>
                            </div>
                        </a>
                    </div>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <center><a href="index3.html" class="brand-link" style="background-color:#17A2B8">
                <img src="{{ asset('logo/bpom.png') }}" style="height:35px;">
                </a>
            </center>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="fa fa-tachometer nav-icon"></i><p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>Loket<i class="right fa fa-angle-right"></i></p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="/loket" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Panggilan Antrian</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="nav-item has-treeview">
                          <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-file-text-o"></i>
                            <p>Laporan<i class="right fa fa-angle-right"></i></p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Presensi</p>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a href="#" class="nav-link">
                                <i class="fa fa-circle-o nav-icon"></i>
                                <p>Kepuasan Pelayanan</p>
                              </a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        @yield('content')
    </div>
    @yield('footer_script')
</body>
</html>