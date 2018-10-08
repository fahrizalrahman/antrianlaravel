@extends('layouts.app_pelanggan')

@section('content')
  <div class="content-wrapper">

    <!-- The Modal 1-->
<div class="modal" id="myModal1" >
  <div class="modal-dialog" >
    <div class="modal-content" style="color:black;">

      <!-- Modal Header -->
      <div class="modal-header" >
        <h4 class="modal-title">LANTAI 1</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="list-sublayanan">

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<!--modal 1-->

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
                <div class="container"> 
                <section class="main" >   
                    <div class="row">  
                    @foreach($layanan_lantai as $layanan_lantais)  
                    <?php $count_sublayanan = \App\Sublayanan::where('id_loket',$layanan_lantais->id)->count() ?>
                        <div class="col-sm-4 col-xs-12">          
                        <div class="card" style="height:170px">
                          <div class="card-heading" style="font-size:16px; background-color:#17A2B8; color:white; text-align:center"><strong> Lantai {{$lantai}}</strong></div>
                          <div class="card-body" style="font-size:16px; text-align:center; font-weight:bold">
                            <p>{{$layanan_lantais->nama_layanan}} ({{$count_sublayanan}})</p>
                          </div>
                          <div class="card-footer">
                           <center><a class="btn" href="{{route('print-antrian',$layanan_lantais->id)}}" style="background-color:#f7bc30; color:white"><i class="fa fa-print"></i> <b>CETAK LAYANAN</b></a></center>
                          </div>
                         </div>
                      </div>
                   @endforeach
                   </div>  
                </section>
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

