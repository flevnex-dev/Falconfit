@extends("admin.layout.master")

@section("title","Dashboard")

@section("content")

<section class="content-header">

  <div class="container-fluid">

    <div class="row mb-2">

      <div class="col-sm-6">

        <h1 class="m-0 text-dark">Dashboard</h1>

      </div>

      <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">

              <li class="breadcrumb-item"><a href="#">Home</a></li>

              <li class="breadcrumb-item active">Dashboard</li>

            </ol>

      </div>

    </div>

  </div><!-- /.container-fluid -->

</section>

<section class="content">

      <div class="container-fluid">

        <!-- Small boxes (Stat box) -->

        <div class="row">

          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-info">

              <div class="inner">

                <h3>{{$total_booking}}</h3>



                <p>Total Booking Order</p>

              </div>

              <div class="icon">

                <i class="ion ion-bag"></i>

              </div>

              <a style="font-size: 20px;"  href="javascript:void(0);" data-param="" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-orange">

              <div class="inner">

                <h3>{{$total_booking_Pending}}</h3>



                <p>Total Pending Order</p>

              </div>

              <div class="icon">

                <i class="fas fa-database"></i>

              </div>

              <a style="font-size: 20px;"  href="javascript:void(0);" data-param="Pending" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <form id="linkFOrm" action="{{url('order/search')}}" method="POST" style="display: none;">

              {{ csrf_field() }}

              <input type="text" value="" name="status">

              <input type="text" value="" name="search">

          </form>

          <!-- ./col -->

          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-success">

              <div class="inner">

                <h3>{{$total_booking_accepted}}</h3>



                <p>Total Accepted</p>

              </div>

              <div class="icon">

                <i class="fas fa-clipboard-check"></i>

              </div>

              <a style="font-size: 20px;"    href="javascript:void(0);" data-param="Accepted" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-warning">

              <div class="inner">

                <h3>{{$total_booking_Pickup}}</h3>



                <p>Total Pickup Parcel</p>

              </div>

              <div class="icon">

                <i class="fas fa-truck"></i>

              </div>

              <a style="font-size: 20px;"    href="javascript:void(0);" data-param="Pickup" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-danger">

              <div class="inner">

                <h3>{{$total_booking_Delivered}}</h3>



                <p>Total Delivered</p>

              </div>

              <div class="icon">

                <i class="fas fa-truck-loading"></i>

              </div>

              <a style="font-size: 20px;"   href="javascript:void(0);" data-param="Delivered" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>



          <div class="col-lg-2 col-6">

            <!-- small box -->

            <div class="small-box bg-olive">

              <div class="inner">

                <h3>{{$total_booking_Cancel}}</h3>



                <p>Total Cancel Order</p>

              </div>

              <div class="icon">

                <i class="ion ion-cash"></i>

              </div>

              <a style="font-size: 20px;"  href="javascript:void(0);" data-param="Cancel" class="small-box-footer linkFormAct">More info <i class="fas fa-arrow-circle-right"></i></a>

            </div>

          </div>

          <!-- ./col -->

        </div>

        <!-- /.row -->

        <!-- Main row -->

        <div class="row">

        	<div class="col-lg-12">

            <!-- /.card -->

            <div class="card">

              <div class="card-header border-0">

                <h3 class="card-title"><b><i class="fa fa-shopping-cart"></i> Today Booking Order</b></h3>

               

              </div>

               <hr /> 

              <div class="card-body" style="overflow: scroll;">

                <table id="example2" class="table table-bordered table-striped">

                  <thead>

                      <tr>

                        <th class="text-center">Tracking ID</th>
                        <th class="text-center">Customer Name</th>
                        <th class="text-center">Customer Phone</th>
                        <th class="text-center">Customer Address</th>
                        <th class="text-center">Total Product</th>
                        <th class="text-center">Payment Type</th>
                        <th class="text-center">Payment Number</th>
                        <th class="text-center">Total Amount</th>
                        <th class="text-center">Discount Amount</th>
                        <th class="text-center">Payable Amount</th>
                        <th class="text-center">Shipping Name</th>
                        <th class="text-center">Shipping Amount</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Created</th>

                      </tr>

                  </thead>

                  <tbody>

                    @isset($dataRow)

                      @if(count($dataRow))

                          @foreach($dataRow as $row)  

                              <tr>

                                  <td class="text-center">

                                    <div class="btn-group">

                                      <button type="button" class="btn btn-default">{{$row->id}}</button>                

                                      <div class="btn-group">

                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                                        </button>

                                        <ul class="dropdown-menu">

                                          <li><a class="dropdown-item" href="{{url('bookingorder/view/'.$row->id)}}">View order </a></li>

                                          <li><a class="dropdown-item" href="{{url('bookingorder/edit/'.$row->id)}}">Modify</a></li>

                                          @if($row->parcel_status=="Pending")

                                          <li><a class="dropdown-item" href="{{url('bookingorder/delete/'.$row->id)}}">Delete</a></li>

                                          @endif

                                          

                                        

                                        </ul>

                                      </div>

                                    </div>

                                  </td>

                                  <td class="text-center">{{$row->customer_id_name}}</td>
                                    <td class="text-center">{{$row->cus_phone_number}}</td>
                                    <td class="text-center">{{$row->cus_address}}</td>
                                    <td class="text-center">{{$row->total_product}}</td>
                                    <td class="text-center">{{$row->payment_type_id_name}}</td>
                                    <td class="text-center">{{$row->payment_number}}</td>
                                    <td class="text-center">{{$row->total_amount}}</td>
                                    <td class="text-center">{{$row->discount_amount}}</td>
                                    <td class="text-center">{{$row->payable_amount}}</td>
                                    <td class="text-center">{{$row->shipping_cost_id_name}}</td>
                                    <td class="text-center">{{$row->shipping_amount}}</td>

                                  <td class="text-center">

                                    @if ($row->status=="Delivered")

                                      {{$row->payment_status}}

                                    @else

                                      Not Delivered Yet

                                    @endif

                                  </td>

                                  <td>{{formatDate($row->created_at)}}</td>

                              

                              </tr>

                          @endforeach

                      @endif

                    @endisset                  

                  </tbody>

                  <tfoot>

                  <tr>

                    <th class="text-center">Tracking ID</th>
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Customer Phone</th>
                    <th class="text-center">Customer Address</th>
                    <th class="text-center">Total Product</th>
                    <th class="text-center">Payment Type</th>
                    <th class="text-center">Payment Number</th>
                    <th class="text-center">Total Amount</th>
                    <th class="text-center">Discount Amount</th>
                    <th class="text-center">Payable Amount</th>
                    <th class="text-center">Shipping Name</th>
                    <th class="text-center">Shipping Amount</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Created</th>



                  </tr>

                  </tfoot>

                </table>

              </div>

            </div>

            <!-- /.card -->

          </div>

          

        </div>

        <!-- /.row (main row) -->

      </div><!-- /.container-fluid -->

    </section>

@endsection



@section("css")

    @include("admin.include.lib.datatable.css")

@endsection



@section("js")

    @include("admin.include.lib.datatable.js")

    <script>

      $(document).ready(function(){

          $('body').on('click','.linkFormAct',function(){

              var dataparam=$(this).attr('data-param');

              $('#linkFOrm').find('input[name=status]').val(dataparam);

              $('#linkFOrm').submit();

          });

      });

    </script>

@endsection