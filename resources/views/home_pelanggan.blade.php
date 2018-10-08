@extends('layouts.app_pelanggan')

@section('content')
  <div class="content-wrapper">

<!-- MODAL -->
@include('pelanggan.modal')

<!-- END MODAL -->

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
                <section class="main" style="margin-top:20px;">   
                    <div class="row">    
                        <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #ff9900">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">1</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" data-toggle="modal" data-target="#myModal1" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>

                                  <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" class="card-link btn btn-primary" id="flip-1" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>                       
                         <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #ff3300">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">2</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" data-toggle="modal" data-target="#myModal2" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>
                                  <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" class="card-link btn btn-primary" id="flip-2" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>                        
                         <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #85adad">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">3</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" data-toggle="modal" data-target="#myModal3" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>
                                  <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" class="card-link btn btn-primary" id="flip-3" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div> 
                    </div>
                    <div class="row">    
                        <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #1a53ff">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">4</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" data-toggle="modal" data-target="#myModal4" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>
                                  <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" class="card-link btn btn-primary" id="flip-4" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>                       
                         <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #33ff33">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">5</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button  style="width:150px" data-toggle="modal" data-target="#myModal5" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>
                                  <div class="col-sm-6 col-xs-6">
                                  <button  style="width:150px" class="card-link btn btn-primary" id="flip-5" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>                        
                         <div class="col-sm-4">                  
                          <div class="card" >
                            <div class="card-body" style="height:200px;background: #c44dff">
                              <center><h1 style="color:white">LANTAI </h1></center>
                              <center><h1 style="color:white">6</h1></center>
                            </div>
                             <div class="card-footer">
                                <div class="row">
                                 <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" data-toggle="modal" data-target="#myModal6" class="card-link btn btn-primary" type="button"><i class="fa fa-info"></i> Info </button>
                                  </div>
                                  <div class="col-sm-6 col-xs-6">
                                  <button style="width:150px" class="card-link btn btn-primary" id="flip-6" type="button"><i class="fa fa-briefcase"></i> Pilih</button> 
                                </div>
                                </div>
                            </div>
                          </div>
                        </div> 
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
@section('scripts')
<script type="text/javascript">
    
</script>
@endsection
