
@extends('layouts.app_admin')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">Edit User</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action=" {{route('user.update',$EditPetugas->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nama</label>
                          <input type="text" class="form-control" value="{{$EditPetugas->nama}}" name="nama" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-Mail</label>
                            <input type="email" class="form-control" value="{{$EditPetugas->email}}" name="email" placeholder="Masukan Email">
                        </div>
                        <div class="form-group">
                            <label>Pilih Jabatan</label>
                            <select class="form-control" value="{{$EditPetugas->jabatan}}" name="jabatan">
                                <option value="petugas">Petugas Loket</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Pilih Lantai</label>
                            <select class="form-control" value="{{$EditPetugas->lantai}}" name="lantai">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                
             {!! Form::close() !!}
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
