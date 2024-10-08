
@extends("admin.layout.master")
@section("title","Edit Product")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('product/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('product/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Product</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('adminProduct/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('adminProduct/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('adminProduct/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('adminProduct/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('adminProduct/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Category</label>
                                  <select class="form-control select2" style="width: 100%;"  id="category_name" name="category_name">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_Category)>0)
                                            @foreach($dataRow_Category as $Category)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->category_name==$Category->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$Category->id}}">{{$Category->name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Sub Category</label>
                                  <select class="form-control select2" style="width: 100%;"  id="sub_category_name" name="sub_category_name">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_SubCategory)>0)
                                            @foreach($dataRow_SubCategory as $SubCategory)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->sub_category_name==$SubCategory->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$SubCategory->id}}">{{$SubCategory->name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="product_name">Product Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->product_name)){
                            ?>
                            value="{{$dataRow->product_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Product Name" id="product_name" name="product_name">
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label for="product_code">Product Code</label>
                      <input type="text" 
                          
                      <?php 
                      if(isset($dataRow->product_code)){
                          ?>
                          value="{{$dataRow->product_code}}" 
                          <?php 
                      }
                      ?>
                      
                      class="form-control" placeholder="Enter Product Code" id="product_code" name="product_code">
                    </div>
                  </div>
              </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->price)){
                            ?>
                            value="{{$dataRow->price}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Product Price" id="price" name="price">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="old_price">Old Price</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->old_price)){
                            ?>
                            value="{{$dataRow->old_price}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Product Price" id="old_price" name="old_price">
                      </div>
                    </div>
                </div>
                
                        {{-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Size</label>
                                  <select class="form-control select2" style="width: 100%;"  id="size" name="size">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_Size)>0)
                                            @foreach($dataRow_Size as $Size)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->id==$Size->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$Size->id}}">{{$Size->name}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div> --}}
                <div class="row">
                  <div class="col-sm-12">
                    <!-- checkbox -->
                    <div class="form-group">
                    <label style="padding-right: 20px;">Size</label>
                    @if(isset($dataRow_Size))    
                      @if(count($dataRow_Size)>0)
                        @foreach($dataRow_Size as $Size)
                          <?php $dataSize = json_decode($dataRow->size);?>
                              <div class="custom-control custom-checkbox">
                                @if(isset($dataRow->size))
                                  @foreach ($dataSize as $item)
                                   
                                <input
                                
                                    @if($item==$Size->name)
                                        checked="checked" 
                                    @endif
                                   
                                class="custom-control-input" type="checkbox" id="customCheckbox{{$Size->id}}" name="size[]" value="{{$Size->name}}">
                                @endforeach
                                    
                                @endif
                                <label for="customCheckbox{{$Size->id}}" class="custom-control-label">{{$Size->name}}</label>
                            </div>
                          @endforeach
                        @endif
                      @endif 
                              
                      
                          </div>
                      </div>
                  </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Color</label>
                                  @if(isset($dataRow_Color))    
                                      @if(count($dataRow_Color)>0)
                                          @foreach($dataRow_Color as $Color)
                                          <?php $dataColor = json_decode($dataRow->color);?>
                                          <div class="form-check">
                                            @if(isset($dataRow->color))
                                              @foreach ($dataColor as $item)
                                            <input
                                            @if($item==$Color->name)
                                                checked="checked" 
                                            @endif
                                     class="form-check-input" type="checkbox" id="color_{{$Color->id}}" name="color[]" value="{{$Color->name}}">
                                            @endforeach
                                            @endif
                                            <label class="form-check-label">{{$Color->name}}</label>
                                          </div>
                                              
                                          @endforeach
                                      @endif
                                  @endif 
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->quantity)){
                            ?>
                            value="{{$dataRow->quantity}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Product Quantity" id="quantity" name="quantity">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="short_details">Short Details</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Product Short Details" id="short_details" name="short_details"><?php 
                                if(isset($dataRow->short_details)){
                                    
                                    echo $dataRow->short_details;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Product Description" id="description" name="description"><?php 
                                if(isset($dataRow->description)){
                                    
                                    echo $dataRow->description;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group field_wrapper">
                          <label>Upload Product Image</label><br>
                          {{-- {{dd($tabImage)}} --}}
                          @if(isset($tabImage))
                              @if(!empty($tabImage))
                              @foreach ($tabImage as $item)
                                <img class="img-thumbnail" src="{{url('upload/product/'.$item->title)}}" width="80">
                              @endforeach
                              @endif
                          @endif

                          <div class="custom-file ">
                            <label class="custom-file-label" for="customFile">Upload Product Image</label>
                            <input type="file" class="custom-file-input"  id="product_image" name="product_image[]">
                            <a href="javascript:void(0);" class="add_button addMoreRemov" title="Add field"><img src="{{url('admin/img/add-icon.png')}}"/></a>
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
              <a class="btn btn-danger" href="{{url('product/edit/'.$dataRow->id)}}">
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
    <!-- summernote -->
    <link rel="stylesheet" href="{{url('admin/plugins/summernote/summernote-bs4.css')}}">
    <style>
      .addMoreRemov {
        display: block;
        overflow: hidden;
        padding-top: 5px;
      }
      .custom-checkbox,.form-check{
        display: inline-block !important;
      }
    </style>
@endsection
        
@section("js")

<script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
$(document).ready(function(){
    $(".select2").select2();
    // Summernote
$('textarea').summernote()
});
</script>
<script type="text/javascript">
  $(document).ready(function(){
      var maxField = 10; //Input fields increment limitation
      var addButton = $('.add_button'); //Add button selector
      var wrapper = $('.field_wrapper'); //Input field wrapper
      var fieldHTML = '<div class="custom-file"><input type="file" class="custom-file-input" name="product_image[]"><label class="custom-file-label">Upload Product Image</label><a href="javascript:void(0);" class="remove_button addMoreRemov"><img src="{{url('admin/img/remove-icon.png')}}"/></a></div>'; //New input field html 
      //var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><img src="{{url('admin/img/remove-icon.png')}}"/></a></div>'; //New input field html 
      var x = 1; //Initial field counter is 1
      
      //Once add button is clicked
      $(addButton).click(function(){
          //Check maximum number of input fields
          if(x < maxField){ 
              x++; //Increment field counter
              $(wrapper).append(fieldHTML); //Add field html
          }
      });
      
      //Once remove button is clicked
      $(wrapper).on('click', '.remove_button', function(e){
          e.preventDefault();
          //$(this).parent('div').remove(); //Remove field html
          $(this).parent('div').fadeOut(); //Remove field html
          x--; //Decrement field counter
      });

      
  });
  </script>

@endsection
        