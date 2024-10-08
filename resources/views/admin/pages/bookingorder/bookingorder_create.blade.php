
@extends("admin.layout.master")
@section("title","Create New Booking Order")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Booking Order</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('bookingorder/list')}}">Booking Order Data</a></li>
              <li class="breadcrumb-item active">Create New Booking Order</li>
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
            <h3 class="card-title">Create New Booking Order</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('bookingorder/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('bookingorder/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('bookingorder/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('bookingorder')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Customer Name</label>
                                  <select class="form-control select2" style="width: 100%;"  id="customer_id" name="customer_id">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_Customer))    
                                            @if(count($dataRow_Customer)>0)
                                                @foreach($dataRow_Customer as $Customer)
                                                    <option value="{{$Customer->id}}">{{$Customer->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="total_amount">Total Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Total Amount" id="total_amount" name="total_amount">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="discount_amount">Discount Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Discount Amount" id="discount_amount" name="discount_amount">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="payable_amount">Payable Amount</label>
                        <input type="text" class="form-control" placeholder="Enter Payable Amount" id="payable_amount" name="payable_amount">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Payment Type</label>
                                  <select class="form-control select2" style="width: 100%;"  id="payment_type_id" name="payment_type_id">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_PaymentMethod))    
                                            @if(count($dataRow_PaymentMethod)>0)
                                                @foreach($dataRow_PaymentMethod as $PaymentMethod)
                                                    <option value="{{$PaymentMethod->id}}">{{$PaymentMethod->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Shipping Cost</label>
                                  <select class="form-control select2" style="width: 100%;"  id="shipping_cost_id" name="shipping_cost_id">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_ShippingCost))    
                                            @if(count($dataRow_ShippingCost)>0)
                                                @foreach($dataRow_ShippingCost as $ShippingCost)
                                                    <option value="{{$ShippingCost->id}}">{{$ShippingCost->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="order_notes">Order notes</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Order notes" id="order_notes" name="order_notes"></textarea>
                      </div>
                    </div>
                </div>
                       
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('bookingorder/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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
        