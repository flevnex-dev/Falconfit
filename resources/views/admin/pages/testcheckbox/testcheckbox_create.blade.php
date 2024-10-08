
@extends("admin.layout.master")
@section("title","Create New testCheckBox")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>testCheckBox</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('testcheckbox/list')}}">testCheckBox Data</a></li>
              <li class="breadcrumb-item active">Create New testCheckBox</li>
            </ol>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include("admin.include.msg")
        </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8 offset-2">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create New testCheckBox</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('testcheckbox/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testcheckbox/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testcheckbox/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testcheckbox')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Size</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_0" name="size" value="SM">
                          <label class="form-check-label">SM</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_1" name="size" value="S">
                          <label class="form-check-label">S</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_2" name="size" value="M">
                          <label class="form-check-label">M</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_3" name="size" value="L">
                          <label class="form-check-label">L</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_4" name="size" value="XL">
                          <label class="form-check-label">XL</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_5" name="size" value="XXL">
                          <label class="form-check-label">XXL</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="size_6" name="size" value="XXL">
                          <label class="form-check-label">XXL</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('testcheckbox/create')}}"><i class="far fa-times-circle"></i> Reset</a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection