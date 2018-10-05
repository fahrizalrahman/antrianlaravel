@extends('layouts.app_pelanggan')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <!-- LINE CHART -->
                <div class="container"> 
                <section class="main" style="margin-top:20px;">   
                    <ul class="ch-grid">
                        <li>
                            <div class="ch-item">       
                                <div class="ch-info" id="flip-1" >
                                    <div class="ch-info-front ch-front-1"><h4 style="margin-top:50px;">LANTAI <br>  1</h4></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket->count() > 0)
                                        @foreach($layanan_loket->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>  
                                </div>
                            </div>
                        </li>
                        
                        <li>
                            <div class="ch-item">
                                <div class="ch-info" id="flip-2">
                                    <div class="ch-info-front ch-front-2"><h4 style="margin-top:50px;">LANTAI <br> 2</h4></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket_2->count() > 0)
                                        @foreach($layanan_loket_2->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif                                        
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="ch-item">
                                <div class="ch-info" id="flip-3">
                                    <div class="ch-info-front ch-front-3"><h4 style="margin-top:50px;">LANTAI <br> 3</h4></div>
                                    <div class="ch-info-back">
                                        @if($layanan_loket_3->count() > 0)
                                        @foreach($layanan_loket_3->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li> <br><br><br>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info" id="flip-4">
                                    <div class="ch-info-front ch-front-4"><h4 style="margin-top:50px;">LANTAI <br> 4</h4></div>
                                    <div class="ch-info-back">
                                     @if($layanan_loket_4->count() > 0)
                                        @foreach($layanan_loket_4->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="ch-item">
                            <div class="ch-info" id="flip-5">
                                <div class="ch-info-front ch-front-5"><h4 style="margin-top:50px;">LANTAI <br> 5</h4></div>
                                <div class="ch-info-back">
                                   @if($layanan_loket_5->count() > 0)
                                         @foreach($layanan_loket_5->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                    @endif  
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                            <div class="ch-item">
                                <div class="ch-info" id="flip-6">
                                    <div class="ch-info-front ch-front-6"><h4 style="margin-top:50px;">LANTAI <br>  6</h4></div>
                                    <div class="ch-info-back">
                                     @if($layanan_loket_5->count() > 0)
                                        @foreach($layanan_loket_6->get() as $value)
                                        <h3>{{$value->nama_layanan}}</h3> 
                                        @endforeach
                                       @endif 
                                    </div>
                                </div>
                            </div>
                          </li>
                        </div>

            <!-- /.card -->
        </div>
    </div>
</div>
</section>
</div>

    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>BPOM</strong>
   
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@endsection
