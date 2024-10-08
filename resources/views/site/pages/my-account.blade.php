@extends('site.layout.master')
@section('title','Login and Register')
@section('content') 
            
<!-- breadcrumb-area start -->
<div class="breadcrumb-area bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
                    <li class="breadcrumb-item active">My Account</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb-area end -->
{{-- @include('admin.include.msg') --}}
@if (session('status'))
    <div class="alert alert-success successPlace alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <h5><i class="icon fas fa-check"></i> {{ session('status') }}</h5>  
    </div>
    <script type="text/javascript">
        setTimeout(function(){
            $('.successPlace').fadeOut('slow');
        }, 5000);
    </script>
    <?php 
    Session::forget('status');
    ?>
@endif
<!-- content-wraper start -->
<div class="content-wraper mt-95">
    <div class="container-fluid">
        <div class="account-dashboard mtb-60">
            {{-- <div class="dashboard-upper-info">
                <div class="row align-items-center no-gutters">
                    <div class="col-lg-3 col-md-12">
                        <div class="d-single-info">
                            <p class="user-name">Hello <span>yourmail@info</span></p>
                            <p>(not yourmail@info? <a href="#">Log Out</a>)</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="d-single-info">
                            <p>Need Assistance? Customer service at.</p>
                            <p>admin@devitems.com.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <div class="d-single-info">
                            <p>E-mail them at </p>
                            <p>support@yoursite.com</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12">
                        <div class="d-single-info text-lg-center">
                            <a class="view-cart" href="cart.html"><i class="fa fa-cart-plus"></i>view cart</a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 col-lg-2">
                    <!-- Nav tabs -->
                    <ul class="nav flex-column dashboard-list" role="tablist">
                        <li><a class="nav-link" data-toggle="tab" href="#dashboard">Dashboard</a></li>
                        <li> <a class="nav-link active" data-toggle="tab" href="#orders">Orders</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#pending">Pending</a></li>
                        <li> <a class="nav-link" data-toggle="tab" href="#confirmed">Confirmed</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#processing">Processing</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#finished">Finished</a></li>
                        <li><a class="nav-link" data-toggle="tab" href="#cancel">Cancel</a></li>
                        <li>
                            <a  onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" href="javascript:void(0);" class="nav-link"> Logout</a>
                        </li>
                        <form id="logout-form" action="{{url('logout')}}" method="POST" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-10">
                    <!-- Tab panes -->
                    <div class="tab-content dashboard-content">
                        <div id="dashboard" class="tab-pane fade show">
                            <h3>Dashboard </h3>
                            <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                        </div>
                        <div id="orders" class="tab-pane fade active">
                            <h3>Orders</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstOrder))
                                            @foreach ($lstOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="pending" class="tab-pane fade">
                            <h3>Pending Order</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstPendingOrder))
                                            @foreach ($lstPendingOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="confirmed" class="tab-pane fade">
                            <h3>Confirmed Order</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstConfirmedOrder))
                                            @foreach ($lstConfirmedOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="processing" class="tab-pane">
                            <h3>Processing Order</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstProcessingOrder))
                                            @foreach ($lstProcessingOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>  
                        </div>
                        <div id="finished" class="tab-pane fade">
                            <h3>Finished Order </h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstFinishedOrder))
                                            @foreach ($lstFinishedOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="cancel" class="tab-pane">
                            <h3>Cancel Order</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            {{-- <th>Actions</th>	 	 	 	 --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (isset($lstCancelOrder))
                                            @foreach ($lstCancelOrder as $row)
                                                <tr>
                                                    <td>{{$row->id}}</td>
                                                    <td>{{$row->product_id_product_name}}</td>
                                                    <td>{{$row->size_id}}</td>
                                                    <td>{{$row->color_id}}</td>
                                                    <td>{{$row->quantity}}</td>
                                                    <td>{{$row->product_price}}</td>
                                                    <td>{{$row->status}}</td>
                                                    {{-- <td><a class="view" href="cart.html">view</a></td> --}}
                                                </tr>
                                            @endforeach
                                        @endif
                                        
                                        
                                    </tbody>
                                </table>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- content-wraper end -->
@endsection
