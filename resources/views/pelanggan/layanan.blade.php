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
            <div class="row" style="margin-top:60px; margin-left:5px;">  
                    @foreach($layanan_lantai as $layanan_lantais)    
                     <div class="col-sm-4">
                        <div class="card" style="width: 20rem; background-color:azure; margin-bottom:15px;">
                            <div class="card-header" style="background-color:chocolate; text-align:center; " data-toggle="tooltip" rel="tooltip" data-placement="top" title="{{$layanan_lantais->nama_layanan}}">
                                {{ str_limit($layanan_lantais->nama_layanan, $limit = 40, $end = '...') }}      
                            </div>
                            <div class="card-body">
                                <center><a href="{{route('print-antrian',$layanan_lantais->id)}}" style="size:8px;" class="btn btn-primary btn-sm-center" > 
                                 <i class="fa fa-arrow-circle-right"> Pilih</i>
                                </a></center>
                            </div>
                        </div>
                    </div> 
                   @endforeach
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
