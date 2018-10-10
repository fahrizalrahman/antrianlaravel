
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

                       <div class="form-group{{ $errors->has('lantai') ? ' has-error' : '' }}">
                          {!! Form::label('lantai', 'Lantai', ['class'=>'col-md-2 control-label']) !!}
                          <select class="form-control{{ $errors->has('lantai') ? ' is-invalid' : '' }}" id="lantai" name="lantai">
                                    <option value="{{$sublayanan->lantai}}">Lantai {{$sublayanan->lantai}}</option>
                                    <option value="1">Lantai 1 </option>
                                    <option value="2">Lantai 2</option>
                                    <option value="3">Lantai 3</option>
                                    <option value="4">Lantai 4</option>
                                    <option value="5">Lantai 5</option>
                                    <option value="6">Lantai 6</option>
                          </select>
                              @if ($errors->has('lantai'))
                                <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('lantai') }}</strong>
                                </span>
                               @endif
                        </div>

                    <span id="select-layanan">
                       <div class="form-group">
                         <label for="id_loket" class="col-md-2 control-label">Nama Layanan</label>
                         <select id="id_loket" class="form-control" name="id_loket">
                              <option value="{{$sublayanan->id_loket}}">{{$sublayanan->nama_layanan}}</option>
                            </select> 
                        </div>
                      </span>

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

@section('scripts')
<script type="text/javascript">
        $(document).on('change', '#lantai', function (e) { 
         var lantai = $(this).val();

          $.get('{{ Url("cek-pilih-lantai") }}',{'_token': $('meta[name=csrf-token]').attr('content'),lantai:lantai}, function(resp){  

            $("#select-layanan").html(resp);
             
          });
    });
</script>
@endsection