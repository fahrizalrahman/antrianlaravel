@extends('layouts.app_pelanggan')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
              <div class="card">

              <div class="card-header">
                <div class="row">
               <div class="col-sm-3">
                  <div class="card">
                       <div class="card-body" style="background-color:#3333ff;color:white;"><h3/>Sisa Antrian : {{$data_sisa_panggilan}}
                       </div>
                  </div>
              </div>
              <div class="col-sm-6">  
              </div>
              <div class="col-sm-3">
                  <div class="card">
                    @if($monitor_tiket->count() < 1)
                       <div class="card-body" style="background-color:#3333ff;color:white;"><h3/>Nomor Antrian : 0
                       </div>
                       @else
                        <div class="card-body" style="background-color:#3333ff;color:white;"><h3/>Nomor Antrian : {{$monitor_tiket->first()->no_antrian}}
                       </div>
                       @endif
                  </div>
              </div>
              </div>          
              </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Loket</th>
                  <th>Nama Layanan</th>
                  <th>Lantai</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @if($monitor_tiket->count() < 1)
                  <tr>
                    <td colspan="4"><center>Belum Ada Antrian</center></td></tr>
                  @else
                 <tr>
                  <td>{{$data_loket->kode}}</td>
                  <td>{{$data_loket->nama_layanan}}</td>
                  <td>{{$data_loket->lantai}}</td>
                  <td><a href="{{ route('loket.edit', $data_loket->id) }}" style="background-color:#17A2B8;color:white;" class="btn btn-sm"><i class="nav-icon fa fa-eye" ></i> Lihat Tiket</a></td>
                </tr>
                @endif
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
              <!-- /.card-body -->
              <div class="card-footer clearfix">
              </div>
            </div>
            <!-- /.card -->
         </div><!-- penutup div col sm -->
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
