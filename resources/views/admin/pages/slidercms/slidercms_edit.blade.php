
@extends("admin.layout.master")
@section("title","Edit Slider CMS")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Slider CMS</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('slidercms/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('slidercms/create')}}">Create New </a></li>
              <li class="breadcrumb-item active">Edit / Modify</li>
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
            <h3 class="card-title">Edit / Modify Slider CMS</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('slidercms/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('slidercms/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('slidercms/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('slidercms/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('slidercms/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->title)){
                            ?>
                            value="{{$dataRow->title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Slider Title" id="title" name="title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="sub_title">Sub Title</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Slider Sub Title" id="sub_title" name="sub_title"><?php 
                                if(isset($dataRow->sub_title)){
                                    
                                    echo $dataRow->sub_title;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Slider Image</label>
                                    <!-- <label for="customFile">Choose Slider Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="slider_image" name="slider_image">
                                      <input type="hidden" value="{{$dataRow->slider_image}}" name="ex_slider_image" />
                                      <label class="custom-file-label" for="customFile">Choose Slider Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->slider_image))
                                    @if(!empty($dataRow->slider_image))
                                        <img class="img-thumbnail" src="{{url('upload/slidercms/'.$dataRow->slider_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>

                        <div class="row">
                          <div class="col-sm-12">
                            <!-- radio -->
                            <div class="form-group">
                            <label>Is Product Upcoming</label>
                      
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio"  
                                              <?php 
                                              if($dataRow->product_upcoming_status=="Yes"){
                                                  ?>
                                                  checked="checked" 
                                                  <?php 
                                              }
                                              ?>
                                        id="product_upcoming_status_0" name="product_upcoming_status" value="Yes">
                                        <label class="form-check-label">Yes</label>
                                      </div>
                              
                                      <div class="form-check">
                                          <input class="form-check-input" type="radio"  
                                              <?php 
                                              if($dataRow->product_upcoming_status=="No"){
                                                  ?>
                                                  checked="checked" 
                                                  <?php 
                                              }
                                              ?>
                                        id="product_upcoming_status_1" name="product_upcoming_status" value="No">
                                        <label class="form-check-label">No</label>
                                      </div>
                              
                                  </div>
                              </div>
                          </div>

                        <div class="row notupcoming" style="display: none;">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Choose Product</label>
                                  <select class="form-control select2" style="width: 100%;"  id="product" name="product">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_Product)>0)
                                            @foreach($dataRow_Product as $Product)
                                                <option 
                                                @if(isset($dataRow->product))
                                                    @if($dataRow->product==$Product->id)
                                                        selected="selected" 
                                                    @endif
                                                @endif 
                                                 value="{{$Product->id}}">{{$Product->product_name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
        
            
            <div class="row upcoming" style="display: none;">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="product_upcoming_content">Product Upcoming Content</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Product Upcoming Content" id="product_upcoming_content" name="product_upcoming_content"><?php 
                                if(isset($dataRow->product_upcoming_content)){
                                    
                                    echo $dataRow->product_upcoming_content;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Is Slider Active</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->slider_status=="Yes"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="slider_status_0" name="slider_status" value="Yes">
                          <label class="form-check-label">Yes</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->slider_status=="No"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="slider_status_1" name="slider_status" value="No">
                          <label class="form-check-label">No</label>
                        </div>
                
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
              <a class="btn btn-danger" href="{{url('slidercms/edit/'.$dataRow->id)}}">
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
@section("css")
    
    <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
    
@endsection
        
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

    <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
        $("input[name=product_upcoming_status]").click(function(){
            $(".upcoming").hide();
            $(".notupcoming").hide();
            if(document.getElementById('product_upcoming_status_0').checked==true)
            {
              $(".upcoming").show();
              
            }
            else if(document.getElementById('product_upcoming_status_1').checked==true)
            {
              $(".notupcoming").show();
            }
        });

        $("input[name=product_upcoming_status]").trigger('click');
    });
    </script>

@endsection
        