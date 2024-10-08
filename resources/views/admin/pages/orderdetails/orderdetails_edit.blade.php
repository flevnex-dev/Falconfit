
@extends("admin.layout.master")
@section("title","Edit Order Details")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Order Details</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('orderdetails/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('orderdetails/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Order Details</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('orderdetails/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('orderdetails/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('orderdetails/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('orderdetails/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('orderdetails/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Order ID</label>
                                  <select disabled class="form-control select2" style="width: 100%;"  id="order_id" name="order_id">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_BookingOrder)>0)
                                            @foreach($dataRow_BookingOrder as $BookingOrder)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->id==$BookingOrder->id)
                                                selected="selected" 
                                            @endif
                                        @endif 
                                         value="{{$BookingOrder->id}}">{{$BookingOrder->customer_id}}</option>
                                                
                                            @endforeach
                                        @endif
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Product</label>
                                  <select disabled class="form-control select2" style="width: 100%;"  id="product_id" name="product_id">
                                    
                                        <option value="">Please Select</option>
                                        @if(count($dataRow_Product)>0)
                                            @foreach($dataRow_Product as $Product)
                                                <option 
                                        @if(isset($dataRow->id))
                                            @if($dataRow->product_id==$Product->id)
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
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" 
                            disabled
                        <?php 
                        if(isset($dataRow->quantity)){
                            ?>
                            value="{{$dataRow->quantity}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Quantity" id="quantity" name="quantity">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="product_price">Product Price</label>
                        <input type="text" 
                            disabled
                        <?php 
                        if(isset($dataRow->product_price)){
                            ?>
                            value="{{$dataRow->product_price}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Product Price" id="product_price" name="product_price">
                      </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                      <div class="form-group">
                        <label>Select Status</label>
                        <select class="form-control select2" style="width: 100%;"  id="status" name="status">
                          <option value="">Please select</option>
                              <option 
                                      <?php 
                                      if($dataRow->status=="Pending"){
                                          ?>
                                          selected="selected" 
                                          <?php 
                                      }
                                      ?> 
                              value="Pending">Pending</option>
                              <option 
                                      <?php 
                                      if($dataRow->status=="Confirmed"){
                                          ?>
                                          selected="selected" 
                                          <?php 
                                      }
                                      ?> 
                              value="Confirmed">Confirmed</option>
                              <option 
                                      <?php 
                                      if($dataRow->status=="Cancelled"){
                                          ?>
                                          selected="selected" 
                                          <?php 
                                      }
                                      ?> 
                              value="Cancelled">Cancel</option>
                              <option 
                                      <?php 
                                      if($dataRow->status=="Processing"){
                                          ?>
                                          selected="selected" 
                                          <?php 
                                      }
                                      ?> 
                              value="Processing">Processing</option>
                              <option 
                                      <?php 
                                      if($dataRow->status=="Finished"){
                                          ?>
                                          selected="selected"
                                          <?php 
                                      }
                                      ?> 
                              value="Finished">Finished</option>
                        </select>
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
              <a class="btn btn-danger" href="{{url('orderdetails/edit/'.$dataRow->id)}}">
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

    <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
    });
    </script>

@endsection
        