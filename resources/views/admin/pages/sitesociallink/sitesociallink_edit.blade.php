
@extends("admin.layout.master")
@section("title","Edit Site Social Link")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Site Social Link</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Site Social Link</li>
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
            <h3 class="card-title">Edit / Modify Site Social Link</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('sitesociallink/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="facebook">Facebook</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->facebook)){
                            ?>
                            value="{{$dataRow->facebook}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Facebook Link" id="facebook" name="facebook">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->twitter)){
                            ?>
                            value="{{$dataRow->twitter}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Twitter Link" id="twitter" name="twitter">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="youtube">Youtube</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->youtube)){
                            ?>
                            value="{{$dataRow->youtube}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Youtube Link" id="youtube" name="youtube">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="google_plus">Google Plus</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->google_plus)){
                            ?>
                            value="{{$dataRow->google_plus}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Google Plus Link" id="google_plus" name="google_plus">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="instagram">Instagram</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->instagram)){
                            ?>
                            value="{{$dataRow->instagram}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Instagram Link" id="instagram" name="instagram">
                      </div>
                    </div>
                </div>
                       
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> 
                Update
              </button>
              <a class="btn btn-danger" href="{{url('sitesociallink/edit/'.$dataRow->id)}}">
                <i class="far fa-times-circle"></i> 
                Reset
              </a>
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