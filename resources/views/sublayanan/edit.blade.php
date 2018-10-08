
@extends('layouts.app_admin')

@section('content')
  <div class="content-wrapper">
        <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Sublayanan</h1>
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
             {!! Form::model($sublayanan, ['url' => route('sublayanan.update', $sublayanan->id), 'method' => 'put']) !!}
            {{csrf_field()}}
                <div class="card-body">
                  <div class="form-group{{ $errors->has('nama_sublayanan') ? ' has-error' : '' }}">
                    {!! Form::label('nama_sublayanan', 'Nama Sublayanan', ['class'=>'col-md-2 control-label']) !!}
                      {!! Form::text('nama_sublayanan', null, ['class'=>'form-control','required','autocomplete'=>'off', 'placeholder' => 'Nama Layanan', 'id' => 'nama_sublayanan' ,'name'=>'nama_sublayanan']) !!}
                      {!! $errors->first('nama_sublayanan', '<p class="help-block" id="nama_layanan_error">:message</p>') !!}
                  </div>

                   <div class="form-group{{ $errors->has('id_loket') ? ' has-error' : '' }}">
                        {!! Form::label('id_loket', 'Nama Layanan', ['class'=>'col-md-2 control-label']) !!}
                        {!! Form::select('id_loket',App\Loket::pluck('nama_layanan','id')->all(), null,['class'=>'form-control','name'=>'id_loket','id'=>'id_loket']) !!}
                            {!! $errors->first('id_loket', '<p class="help-block">:message</p>') !!}

                             @if ($errors->has('id_loket'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('id_loket') }}</strong>
                                    </span>
                            @endif
                        </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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
