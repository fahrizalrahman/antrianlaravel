@extends('layouts.app_admin')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Layanan</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <!-- Content Header (Page header) -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             {!! Form::model($loket, ['url' => route('loket.update', $loket->id), 'method' => 'put']) !!}
              {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group{{ $errors->has('nama_layanan') ? ' has-error' : '' }}">
                    {!! Form::label('nama_layanan', 'Nama Layanan', ['class'=>'col-md-2 control-label']) !!}
                      {!! Form::text('nama_layanan', null, ['class'=>'form-control','required','autocomplete'=>'off', 'placeholder' => 'Nama Layanan', 'id' => 'nama_layanan' ,'name'=>'nama_layanan']) !!}
                      {!! $errors->first('nama_layanan', '<p class="help-block" id="nama_layanan_error">:message</p>') !!}
                  </div>

                  <div class="form-group{{ $errors->has('kode') ? ' has-error' : '' }}">
                    {!! Form::label('kode', 'Loket', ['class'=>'col-md-2 control-label']) !!}
                      {!! Form::text('kode', null, ['class'=>'form-control','required','autocomplete'=>'off', 'placeholder' => 'No Loket', 'id' => 'kode','name' => 'kode']) !!}
                      {!! $errors->first('kode', '<p class="help-block" id="kode_error" style="color:red;">:message</p>') !!}
                  </div>


                  <div class="form-group{{ $errors->has('lantai') ? ' has-error' : '' }}">
                      {!! Form::label('lantai', 'Lantai', ['class'=>'col-md-2 control-label']) !!}
                      {!! Form::select('lantai', ['1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6'], null, ['class'=>'form-control', 'placeholder' => 'Pilih Lantai']) !!}
                          @if ($errors->has('lantai'))
                            <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('lantai') }}</strong>
                            </span>
                           @endif
                    </div>


                  <div class="form-group{{ $errors->has('petugas') ? ' has-error' : '' }}">
                        {!! Form::label('petugas', 'Petugas', ['class'=>'col-md-2 control-label']) !!}
                        {!! Form::select('petugas',App\User::where('jabatan','petugas_loket')->pluck('name','id')->all(), null,['class'=>'form-control','name'=>'petugas','id'=>'petugas']) !!}
                            {!! $errors->first('petugas', '<p class="help-block">:message</p>') !!}

                             @if ($errors->has('petugas'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('petugas') }}</strong>
                                    </span>
                            @endif
                        </div>  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
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
