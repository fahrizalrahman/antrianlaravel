@extends('layouts.app_admin')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sublayanan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            @include('layouts._flash')
           <div class="card">
            <div class="card-header">
                <a href="{{ route('sublayanan.create') }}" class="btn btn-primary" type="button" ><i class="nav-icon fa fa-plus"></i> Tambah Sublayanan</a>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Sublayanan </th>
                  <th>Nama Layanan</th>
                  <th >Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data_sublayanan as $value)
                 <tr>
                  <td>{{$value->nama_sublayanan}}</td>
                  <td>{{$value->nama_layanan}}</td>
                  <td>
                    <a href="{{ route('sublayanan.edit', $value->id) }}" class="btn btn-warning btn-sm"><i class="nav-icon fa fa-wrench"></i></a> || 
                    
                     <a href="{{ route('sublayanan.destroy',$value->id)}}" class="btn btn-danger btn-sm"><i class="nav-icon fa fa-trash"></i></a>

                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
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