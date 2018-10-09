@extends('layouts.app_admin')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Petugas</h1>
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
                <a href="{{ route('petugas.create') }}" class="btn btn-primary" type="button" ><i class="nav-icon fa fa-plus"></i> Tambah Petugas</a>
            
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nama Petugas</th>
                  <th>Email </th>
                  <th>NIK </th>
                  <th>No Telp</th>
                  <th>Jabatan</th>
                  <th>Lantai</th>
                   <th>Aksi</th> 
                </tr>
                </thead>
                <tbody>
                @foreach($petugas as $value)
                 <tr>
                  <td>{{$value->name}}</td>
                  <td>{{$value->email}}</td>
                  <td>{{$value->nik}}</td>
<<<<<<< HEAD
                  <td>{{$value->no_telp}}</td> 
=======
                  <td>{{$value->no_telp}}</td>
>>>>>>> cb9c27cb771930aec605206fd4fee22dc24a3d6c
                  <td>{{$value->jabatan}}</td>
                  <td>{{$value->lantai}}</td>
                  <td>
                      <form action="{{route('petugas.destroy', $value->id)}}" method="POST"">
                        <a href="{{ route('petugas.edit', $value->id) }}" class="btn btn-warning btn-sm"><i class="nav-icon fa fa-wrench"></i></a> || 
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger"><i class="nav-icon fa fa-trash"></i></button>
                      </form>
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
