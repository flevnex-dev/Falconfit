
@extends("admin.layout.master")
@section("title","Product")
@section("content")
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Product</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{url('product/create')}}">Create New </a></li>
                  <li class="breadcrumb-item active">Product Data</li>
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
        
        <section class="content">
          <div class="row">
            <div class="col-12">
              <!-- /.card -->
              <div class="card">

                <div class="card-header">
                  <h3 class="card-title">Product Data</h3>

                    <div class="card-tools">
                      <ul class="pagination pagination-sm float-right">
                        <li class="page-item">
                            <a class="page-link bg-primary" href="{{url('adminProduct/create')}}"> 
                                Add New 
                                <i class="fas fa-plus"></i> 
                            </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('adminProduct/export/pdf')}}">
                            <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                          </a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" target="_blank" href="{{url('adminProduct/export/excel')}}">
                            <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                </div>


                
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">Category Name </th>
                            <th class="text-center">Sub Category Name </th>
                            <th class="text-center">Product Name</th>
                            <th class="text-center">Product Code</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Old Price</th>
                            {{-- <th class="text-center">Size Name</th>
                            <th class="text-center">Color Name</th> --}}
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Created At</th>
                            <th class="text-center">Actions</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if(count($dataRow))
                            @foreach($dataRow as $row)  
                                <tr>
                                    <td class="text-center">{{$row->id}}</td>
                                    <td class="text-center">{{$row->category_name_name}}</td>
                                    <td class="text-center">{{$row->sub_category_name_name}}</td>
                                    <td class="text-center">{{$row->product_name}}</td>
                                    <td class="text-center">{{$row->product_code}}</td>
                                    <td class="text-center">{{$row->price}}</td>
                                    <td class="text-center">{{$row->old_price}}</td>
                                    {{-- <td class="text-center">{{$row->size_name}}</td>
                                    <td class="text-center">{{$row->color_name}}</td> --}}
                                    <td class="text-center">{{$row->quantity}}</td>
                                    <td>{{formatDate($row->created_at)}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('adminProduct/edit/'.$row->id)}}" type="button" class="btn btn-default">
                                                Edit 
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <a href="{{url('adminProduct/delete/'.$row->id)}}" type="button" class="btn btn-default">
                                                Delete 
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                
                                </tr>
                            @endforeach
                        @endif
                                        
                    </tbody>
                    <tfoot>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Category Name </th>
                        <th class="text-center">Sub Category Name </th>
                        <th class="text-center">Product Name</th>
                        <th class="text-center">Product Code</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Old Price</th>
                        {{-- <th class="text-center">Size Name</th>
                        <th class="text-center">Color Name</th> --}}
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Actions</th>

                    </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </section>
@endsection
@section("css")
    @include("admin.include.lib.datatable.css")
@endsection

@section("js")
    @include("admin.include.lib.datatable.js")
@endsection
        